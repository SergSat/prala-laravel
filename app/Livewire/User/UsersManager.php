<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersManager extends Component
{
    public $users, $roles, $permissions;
    public $selectedUserId, $selectedRoles = [], $selectedPermissions = [];
    public $userName, $userEmail, $password;

    protected $rules = [
        'userName' => 'required|string|max:255',
        'userEmail' => 'required|email|max:255',
        'password' => 'required|string|min:8',
        'selectedRoles' => 'array',
        'selectedPermissions' => 'array',
    ];

    public function mount()
    {
        $this->loadResources();
    }

    public function loadResources()
    {
        $this->users = User::with('roles', 'permissions')->get();
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    public function create()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->userName,
            'email' => $this->userEmail,
            'password' => Hash::make($this->password),
        ]);

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        $user->syncPermissions($this->selectedPermissions);

        $this->resetInput();
    }

    public function edit($userId)
    {
        $user = User::find($userId);
        $this->selectedUserId = $userId;
        $this->userName = $user->name;
        $this->userEmail = $user->email;
        $this->selectedRoles = $user->roles->pluck('id')->toArray();
        $this->selectedPermissions = $user->permissions->pluck('id')->toArray();
    }

    public function update()
    {
        $this->validate([
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|email|max:255',
        ]);

        $user = User::find($this->selectedUserId);
        $user->update([
            'name' => $this->userName,
            'email' => $this->userEmail,
        ]);

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        $user->syncPermissions($this->selectedPermissions);

        $this->resetInput();
    }

    public function delete($userId)
    {
        $this->dispatch('confirm-delete', modelName: 'App\Models\User', modelId: $userId);
    }

    private function resetInput()
    {
        $this->userName = '';
        $this->userEmail = '';
        $this->password = '';
        $this->selectedRoles = [];
        $this->selectedPermissions = [];
        $this->selectedUserId = null;
        $this->loadResources();
    }

    #[On('update-list')]
    public function render()
    {
        return view('livewire.admin.users.users-manager');
    }
}
