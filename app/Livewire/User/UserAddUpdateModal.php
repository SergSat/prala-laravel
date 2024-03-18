<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserAddUpdateModal extends Component
{
    public $show = false;
    public $userId;
    public $userName;
    public $userEmail;
    public $password;
    public $selectedRoles = [];
    public $roles;

    public function mount()
    {
        $this->roles = Role::all();
    }

    #[On('user-create')]
    public function showCreate()
    {
        $this->resetInput();
        $this->show = true;
    }

    #[On('user-edit')]
    public function showEdit($id)
    {
        $user = User::with('roles')->find($id);
        if (!$user)
            return;

        $this->userId = $user->id;
        $this->userName = $user->name;
        $this->userEmail = $user->email;
        $this->selectedRoles = $user->roles->pluck('id')->toArray();
        $this->show = true;
    }

    public function saveUser()
    {
        $this->validate([
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'selectedRoles' => 'required|array|min:1',
        ]);

        // Save user
        $user = User::create([
            'name' => $this->userName,
            'email' => $this->userEmail,
            'password' => Hash::make($this->password),
        ]);

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

    }

    public function updateUser($userId)
    {
        $user = User::find($userId);

        if (!$user)
            return;

        $this->validate([
            'userName' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'selectedRoles' => 'required|array|min:1',
        ]);

        // Save user
        $user->update([
            'name' => $this->userName,
            'password' => Hash::make($this->password),
        ]);

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');
    }

    private function resetInput()
    {
        $this->userId = null;
        $this->userName = '';
        $this->userEmail = '';
        $this->password = '';
        $this->selectedRoles = [];
    }

    public function render()
    {
        return view('livewire.admin.users.user-add-update-modal');
    }
}
