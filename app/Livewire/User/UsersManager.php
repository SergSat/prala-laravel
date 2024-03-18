<?php

namespace App\Livewire\User;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class UsersManager extends Component
{
    use HandlesCRUD;

    public function mount()
    {
        $this->modelClass = User::class;
        $this->columns = ['name', 'email', 'roles_label'];
        $this->modelAddUpdateClass = UserAddUpdateModal::class;
        $this->dispatchEventBaseName = 'user';
        $this->loadResources();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.users-manager');
    }
}
