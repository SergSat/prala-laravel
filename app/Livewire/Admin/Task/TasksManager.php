<?php

namespace App\Livewire\Admin\Task;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Task;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class TasksManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Task::class;
        $this->columns = ['name', 'status', 'assigned_to', 'created_at'];
        $this->modelAddUpdateClass = TaskAddUpdateModal::class;
        $this->dispatchEventBaseName = 'task';
        $this->wrappers = [
            'status' => [
                __('completed') => [
                    'before' => '<span class="inline-flex px-3 items-center w-auto justify-center rounded-lg bg-green-500 text-black">',
                    'after' => '</span>',
                ],
                __('pending') => [
                    'before' => '<span class="inline-flex px-3 items-center w-auto justify-center rounded-lg bg-orange-500 text-white">',
                    'after' => '</span>',
                ]
            ]
        ];
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.tasks.tasks-manager', [
            'elements' => $this->model::paginate($this->perPage),
            'wrappers' => $this->wrappers,
        ]);
    }
}
