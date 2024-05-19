<?php

namespace App\Livewire\Pages\Employee;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class EmployeePageShow extends Component
{
    public $id;
    public $user;
    public $breadcrumbs = [];
    public $tasks = [];

    public function showModal()
    {
        $this->dispatch('show-add-task-modal', $this->user->id)->to(AddTaskModal::class);
    }

    public function mount($id)
    {
        $this->id = $id;
        $this->user = User::find($id);
        $this->loadTasks();
        $this->generateBreadcrumbs();
    }

    public function toggleTaskCompletion($taskId)
    {
        $task = $this->tasks->find($taskId);
        $task->update(['completed' => !$task->completed]);
        $this->loadTasks();
    }

    public function deleteTask($taskId)
    {
        $task = $this->tasks->find($taskId);
        $task->delete();
        $this->loadTasks();
    }

    #[On('update-component')]
    public function loadTasks()
    {
        $this->tasks = $this->user->tasks;
    }


    /**
     * Get the breadcrumbs
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        $user = User::find($this->id);
        if ($user) {
            array_unshift($this->breadcrumbs, ['title' => $user->name, 'url' => route('finished-polls.show', $user->id)]);
        }
        array_unshift($this->breadcrumbs, ['title' => __('employees'), 'url' => route('professions.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.employee.employee-page-show', [
            'user' => $this->user,
            'tasks' => $this->tasks,
        ]);
    }
}
