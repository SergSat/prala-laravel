<?php

namespace App\Livewire\Admin\Poll;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Option;
use App\Models\Poll;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class PollAddUpdateModal extends Component
{
    use NotifyCRUD;

    use WithFileUploads;

    public $show = false;

    public $id = null;
    public $title = '';
    public $finished = false;
    public $imagePath;
    public $currentImagePath;

    public $options = [''];

    public function mount()
    {
        //
    }

    #[On('poll-create')]
    public function showCreate(): void
    {
        $this->resetInput();

        $this->show = true;
    }

    #[On('poll-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $poll = Poll::find($id);
        if (!$poll)
            return;

        $this->id = $poll->id;
        $this->title = $poll->title;
        $this->options = $poll->options->map(function ($option) {
            return ['id' => $option->id, 'name' => $option->name];
        })->toArray();

        $this->currentImagePath = $poll->image_path ?? null;

        $this->finished = (bool)$poll->finished;

        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'imagePath' => 'nullable|image|max:2048',
        ]);

        // Save model
        $created_poll = Poll::create([
            'title' => $this->title,
        ]);

        // Save photo
        if ($this->imagePath) {
            $created_poll->image_path = $this->imagePath->store('polls', 'public');
            $created_poll->save();
        }

        foreach ($this->options as $option) {
            Option::create([
                'poll_id' => $created_poll->id,
                'name' => $option['name'],
            ]);
        }

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created_poll);
    }

    public function updatePoll($id)
    {
        $poll = Poll::findOrFail($id);

        $this->validate([
            'title' => 'required|string|max:255',
            'finished' => 'boolean',
        ]);

        $updated_poll = $poll->update([
            'title' => $this->title,
            'finished' => $this->finished
        ]);

        // Получаем текущие ID опций для определения, какие из них удалить позже
        $currentOptionIds = $poll->options()->pluck('id')->toArray();

        $newOptionIds = [];

        foreach ($this->options as $option) {
            if (!empty($option['id'])) {
                // Update existing option
                $pollOption = $poll->options()->find($option['id']);
                if ($pollOption) {
                    $pollOption->update(['name' => $option['name']]);
                    $newOptionIds[] = $pollOption->id;
                }
            } else {
                // Добавление новой опции
                $newOption = $poll->options()->create(['name' => $option['name']]);
                $newOptionIds[] = $newOption->id;
            }
        }

        // Delete options that are not in the new list
        $optionsToDelete = array_diff($currentOptionIds, $newOptionIds);
        if (!empty($optionsToDelete)) {
            Option::destroy($optionsToDelete);
        }

        // Save image
        if ($this->imagePath) {
            // Optionally delete the old image
            if ($poll->image_path) {
                Storage::disk('public')->delete($poll->image_path);
            }

            $poll->image_path = $this->imagePath->store('polls', 'public');
            $poll->save();
        }

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated_poll);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->title = '';
        $this->options = [];
        $this->imagePath = null;
    }

    public function addOption()
    {
        $this->options[] = ['id' => null, 'name' => ''];
    }

    public function removeOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    public function render()
    {
        return view('livewire.admin.polls.poll-add-update-modal');
    }
}
