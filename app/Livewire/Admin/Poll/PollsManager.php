<?php

namespace App\Livewire\Admin\Poll;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Poll;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class PollsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Poll::class;
        $this->columns = ['title', 'status', 'created_at'];
        $this->modelAddUpdateClass = PollAddUpdateModal::class;
        $this->dispatchEventBaseName = 'poll';
        $this->wrappers = [
            'status' => [
                __('finished') => [
                    'before' => '<span class="inline-flex px-3 items-center w-auto justify-center rounded-lg bg-gray-500 text-white">',
                    'after' => '</span>',
                ],
                __('available') => [
                    'before' => '<span class="inline-flex px-3 items-center w-auto justify-center rounded-lg bg-blue-500 text-white">',
                    'after' => '</span>',
                ]
            ]
        ];
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.polls.polls-manager', [
            'elements' => $this->model::paginate($this->perPage),
            'wrappers' => $this->wrappers,
        ]);
    }
}
