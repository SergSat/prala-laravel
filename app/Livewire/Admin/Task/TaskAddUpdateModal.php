<?php

namespace App\Livewire\Admin\Task;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Task;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskAddUpdateModal extends Component
{
    use NotifyCRUD;

    public $show = false;

    public $id = null;
    public $userId;
    public $completed = false;
    public $name;
    public $selectedUsers = [];
    public $search = '';

    public function mount()
    {
        //
    }

    #[On('task-create')]
    public function showCreate(): void
    {
        $this->resetInput();

        $this->show = true;
        $this->search = '';
    }

    #[On('task-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $task = Task::with('user')->find($id);
        if (!$task)
            return;

        $this->id = $task->id;
        $this->name = $task->name;
        $this->completed = (bool)$task->completed;
        $this->userId = $task->user->id;
        $this->search = $task->user->name;

        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'completed' => 'boolean',
            'userId' => 'required|min:1',
        ]);

        // Save model
        $created = Task::create([
            'name' => $this->name,
            'completed' => $this->completed,
            'user_id' => $this->userId,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created);
    }

    public function updateTask($id)
    {
        $task = Task::find($id);

        if (!$task)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'completed' => 'boolean',
            'userId' => 'required|numeric|min:1',
        ]);

        // Save task
        $updated = $task->update([
            'name' => $this->name,
            'completed' => $this->completed,
            'user_id' => $this->userId,
        ]);

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->name = '';
        $this->completed = false;
        $this->userId = null;
        $this->selectedUsers = [];
    }

    /**
     * Search for items
     * @return void
     */
    public function updatedSearch()
    {
        $this->selectedUsers = User::where('name', 'like', '%' . $this->search . '%')->get();
    }

    /**
     * Select user
     * @param int $id
     * @param string $name
     * @return void
     */
    public function selectUser($id, $name)
    {
        $this->userId = $id;
        $this->search = $name;
        $this->selectedUsers = [];
    }

    public function render()
    {
        return view('livewire.admin.tasks.task-add-update-modal');
    }
}
