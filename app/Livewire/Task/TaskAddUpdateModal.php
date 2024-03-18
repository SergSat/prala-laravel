<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TaskAddUpdateModal extends Component
{
    public $show = false;
    public $users = null;
    public $selectedUsers = null;
    public $id;
    public $name;
    public $userId;

    public function mount()
    {
        $this->users = User::all();
    }

    #[On('task-create')]
    public function showCreate()
    {
        $this->resetInput();
        $this->show = true;
    }

    #[On('task-edit')]
    public function showEdit($id)
    {

        $task = Task::with('user')->find($id);
        if (!$task)
            return;

        $this->id = $task->id;
        $this->name = $task->name;
        $this->userId = [$task->user->id];
        $this->show = true;
    }

    public function saveTask()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'userId' => 'required|min:1',
        ]);

        // Save task
        Task::create([
            'name' => $this->name,
            'user_id' => $this->userId,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

    }

    public function updateTask($id)
    {
        $task = Task::find($id);

        if (!$task)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'userId' => 'required|numeric|min:1',
        ]);

        // Save task
        $task->update([
            'name' => $this->name,
            'user_id' => $this->userId,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');
    }

    private function resetInput()
    {
        $this->id = null;
        $this->name = '';
        $this->userId = null;
    }

    public function render()
    {
        return view('livewire.admin.tasks.task-add-update-modal');
    }
}
