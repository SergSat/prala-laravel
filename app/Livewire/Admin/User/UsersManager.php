<?php

namespace App\Livewire\Admin\User;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class UsersManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = User::class;
        $this->columns = ['name', 'email', 'professions_label', 'roles_label'];
        $this->modelAddUpdateClass = UserAddUpdateModal::class;
        $this->dispatchEventBaseName = 'user';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.users-manager', [
            'elements' => $this->model::paginate($this->perPage),
        ]);
    }
}
