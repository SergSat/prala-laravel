<?php

namespace App\Livewire\User;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserCRUDModal extends Component
{
    public $showModal = false;
    public $userId;
    public $userName;
    public $userEmail;
    public $password;
    public $selectedRoles = [];
    public $selectedPermissions = [];

    protected $listeners = ['editUser' => 'edit', 'createUser' => 'create'];

    public function create()
    {
        $this->resetInput();
        $this->showModal = true;
    }

    public function edit($userId)
    {
        $user = User::with('roles', 'permissions')->find($userId);
        if ($user) {
            $this->userId = $user->id;
            $this->userName = $user->name;
            $this->userEmail = $user->email;
            $this->selectedRoles = $user->roles->pluck('id')->toArray();
            $this->selectedPermissions = $user->permissions->pluck('id')->toArray();
            $this->showModal = true;
        }
    }

    private function resetInput()
    {
        $this->userId = null;
        $this->userName = '';
        $this->userEmail = '';
        $this->password = '';
        $this->selectedRoles = [];
        $this->selectedPermissions = [];
    }

    public function render()
    {
        return view('livewire.admin.users.user-c-r-u-d-modal', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }
}
