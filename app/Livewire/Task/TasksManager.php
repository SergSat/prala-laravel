<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class TasksManager extends Component
{
    public $tasks, $name, $completed, $userId, $taskBeingEdited;

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function editTask(Task $task)
    {
        $this->taskBeingEdited = $task->id;
        $this->name = $task->name;
        $this->completed = $task->completed;
        $this->userId = $task->user_id;
    }

    public function saveTask()
    {
        $task = Task::find($this->taskBeingEdited);
        $task->update([
            'name' => $this->name,
            'completed' => $this->completed,
            'user_id' => $this->userId,
        ]);

        $this->resetInput();
        $this->tasks = Task::all(); // Refresh the tasks list
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        $this->tasks = Task::all(); // Refresh the tasks list
    }

    public function addTask()
    {
        Task::create([
            'name' => $this->name,
            'completed' => $this->completed,
            'user_id' => $this->userId,
        ]);

        $this->resetInput();
        $this->tasks = Task::all(); // Refresh the tasks list
    }

    private function resetInput()
    {
        $this->name = null;
        $this->completed = false;
        $this->userId = null;
        $this->taskBeingEdited = null;
    }

    public function render()
    {
        return view('livewire.admin.roles.tasks-manager', [
            'tasks' => $this->tasks,
            'users' => User::all()
        ]);
    }
}
