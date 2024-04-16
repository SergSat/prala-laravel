<?php

namespace App\Livewire\Admin\User;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Profession;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class UserAddUpdateModal extends Component
{
    use NotifyCRUD, WithFileUploads;

    public $show = false;
    public $userId;
    public $userName;
    public $userEmail;
    public $password;
    public $selectedRoles = [];
    public $roles;
    public $changePassword = false;
    public $profilePhoto;
    public $currentProfilePhoto;
    public $professions;
    public $selectedProfessions;

    public function mount()
    {
        $this->roles = Role::all();
        $this->professions = Profession::all();
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
        if ($user->profile_photo_path) {
            $this->currentProfilePhoto = $user->profile_photo_path;
        }
        $this->userEmail = $user->email;
        $this->selectedRoles = $user->roles->pluck('id')->toArray();
        $this->selectedProfessions = $user->professions->pluck('id')->toArray();
        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'selectedRoles' => 'required|array|min:1',
            'selectedProfessions' => 'required|array|min:1',
            'profilePhoto' => 'nullable|image|max:1024',
        ]);

        // Save user
        $user = User::create([
            'name' => $this->userName,
            'email' => $this->userEmail,
            'password' => Hash::make($this->password),
        ]);

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        $professions = Profession::findMany($this->selectedProfessions);
        $user->professions()->sync($professions);

        // Save profile photo
        if ($this->profilePhoto) {
            $user->profile_photo_path = $this->profilePhoto->store('profile-photos', 'public');
            $user->save();
        }

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($user);

    }

    public function updateUser($userId)
    {
        $user = User::find($userId);

        if (!$user)
            return;

        $rules = [
            'userName' => 'required|string|max:255',
            'selectedRoles' => 'required|array|min:1',
            'selectedProfessions' => 'required|array|min:1',
            'profilePhoto' => 'nullable|image|max:1024',
        ];

        if ($this->changePassword) {
            $rules['password'] = 'required|string|min:8';
        }

        $this->validate($rules);

        // Save user
        $user->update([
            'name' => $this->userName,
        ]);

        if ($this->changePassword) {
            $user->password = Hash::make($this->password);
            $user->save();
        }

        $roles = Role::findMany($this->selectedRoles);
        $user->syncRoles($roles);

        $professions = Profession::findMany($this->selectedProfessions);
        $user->professions()->sync($professions);

        // Update profile photo
        if ($this->profilePhoto) {
            // Optionally delete the old image
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $user->profile_photo_path = $this->profilePhoto->store('profile-photos', 'public');
            $user->save();
        }

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyUpdated($user);
    }

    private function resetInput()
    {
        $this->userId = null;
        $this->userName = '';
        $this->userEmail = '';
        $this->password = '';
        $this->changePassword = false;
        $this->selectedRoles = [];
        $this->selectedProfessions = [];
        $this->profilePhoto = null;
        $this->currentProfilePhoto = null;
    }

    public function render()
    {
        return view('livewire.admin.users.user-add-update-modal');
    }
}
