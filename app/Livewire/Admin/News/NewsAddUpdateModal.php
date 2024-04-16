<?php

namespace App\Livewire\Admin\News;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\News;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use HTMLPurifier;
use HTMLPurifier_Config;
use Livewire\WithFileUploads;

class NewsAddUpdateModal extends Component
{
    use NotifyCRUD;
    use WithFileUploads;

    public $show = false;

    public $trixId;
    public $id = null;
    public $title = null;
    public $content = null;
    public $imagePath = null;
    public $currentImagePath = null;

    public function mount()
    {
        //
    }

    #[On('news-create')]
    public function showCreate(): void
    {
        $this->resetInput();

        $this->show = true;
    }

    #[On('news-edit')]
    public function showEdit($id)
    {
        $this->trixId = uniqid();
        $this->resetInput();

        $news = News::find($id);
        if (!$news)
            return;

        $this->id = $news->id;
        $this->title = $news->title;
        $this->content = $news->content;
        $this->currentImagePath = $news->image_path ?? null;
        $this->dispatch('init-editor');

        $this->show = true;
    }

    #[On('set-content')]
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:1',
            'imagePath' => 'nullable|image|max:2048',
        ]);

        // Save model
        $created_news = News::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Save photo
        if ($this->imagePath) {
            $created_news->image_path = $this->imagePath->store('news', 'public');
            $created_news->save();
        }

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created_news);
    }

    public function updateNews($id)
    {
        $news = News::find($id);

        if (!$news)
            return;

        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20',
        ]);

        // Save news
        $updated = $news->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Save image
        if ($this->imagePath) {
            // Optionally delete the old image
            if ($news->image_path) {
                Storage::disk('public')->delete($news->image_path);
            }

            $news->image_path = $this->imagePath->store('news', 'public');
            $news->save();
        }

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->title = '';
        $this->content = '';
        $this->imagePath = null;
    }

    public function render()
    {
        return view('livewire.admin.news.news-add-update-modal');
    }
}
