<?php

namespace App\Livewire\Pages\Employee;

use App\Models\Task;
use Livewire\Attributes\On;
use Livewire\Component;

class AddTaskModal extends Component
{
    public $show = false;
    public $userId = null;
    public $name = '';

    /**
     * Show the modal
     *
     * @param  mixed $userId
     * @return void
     */
    #[On('show-add-task-modal')]
    public function showModal($userId)
    {
        $this->userId = $userId;
        $this->show = true;
    }

    /**
     * Save the task
     *
     * @return void
     */
    public function save()
    {
        $this->validate([
            'name' => 'required|string',
        ]);

        $task = Task::create([
            'user_id' => $this->userId,
            'name' => $this->name,
            'completed' => false
        ]);

        if (!$task) {
            $this->js('alert("'.__('task_failed_to_add').'")');
        }

        $this->name = '';

        $this->dispatch('update-component');

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.pages.employee.add-task-modal');
    }
}
