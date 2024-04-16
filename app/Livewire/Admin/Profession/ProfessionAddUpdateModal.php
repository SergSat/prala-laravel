<?php

namespace App\Livewire\Admin\Profession;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Profession;
use Livewire\Attributes\On;
use Livewire\Component;

class ProfessionAddUpdateModal extends Component
{
    use NotifyCRUD;

    public $show = false;

    public $id = null;
    public $name;
    public $description;

    public function mount()
    {
        //
    }

    #[On('profession-create')]
    public function showCreate(): void
    {
        $this->resetInput();
        $this->show = true;
    }

    #[On('profession-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $profession = Profession::find($id);
        if (!$profession)
            return;

        $this->id = $profession->id;
        $this->name = $profession->name;
        $this->description = $profession->description;

        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Save model
        $created = Profession::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created);
    }

    public function update($id)
    {
        $profession = Profession::find($id);

        if (!$profession)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Save profession
        $updated = $profession->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated);
    }

    /**
     * Reset input fields
     * @return void
     */
    private function resetInput()
    {
        $this->id = null;
        $this->name = null;
        $this->description = null;
    }

    public function render()
    {
        return view('livewire.admin.profession.profession-add-update-modal');
    }
}
