<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersManager extends Component
{
    public $users, $roles, $permissions;

    public function mount()
    {
        $this->loadResources();
    }

    public function loadResources()
    {
        $this->users = User::with('roles', 'permissions')->get();
        $this->roles = Role::all();
    }

    #[On('update-component')]
    public function updateUserList()
    {
        $this->loadResources();
    }

    public function create()
    {
        $this->dispatch('create-user');
    }

    public function edit($userId)
    {
        $this->dispatch('edit-user', $userId);
    }

    public function delete($userId)
    {
        $this->dispatch('confirm-delete', modelName: 'App\Models\User', modelId: $userId);
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.users-manager');
    }
}
