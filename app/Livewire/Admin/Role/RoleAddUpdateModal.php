<?php

namespace App\Livewire\Admin\Role;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Role;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class RoleAddUpdateModal extends Component
{
    use NotifyCRUD;

    public $show = false;
    public $id;
    public $name;
    public $role;
    public $permissions;
    public $selectedPermissions;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    #[On('role-create')]
    public function showCreate()
    {
        $this->resetInput();
        $this->show = true;
    }

    #[On('role-edit')]
    public function showEdit($id)
    {
        $role = Role::with('permissions')->find($id);
        if (!$role)
            return;

        $this->id = $role->id;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'selectedPermissions' => 'required|array|min:1',
        ]);

        // Save role
        $role = Role::create([
            'name' => $this->name,
        ]);

        $permissions = Permission::findMany($this->selectedPermissions);

        $role->syncPermissions($permissions);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($role);

    }

    public function updateRole($id)
    {
        $role = Role::find($id);

        if (!$role)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'selectedPermissions' => 'required|array|min:1',
        ]);

        // Save user
        $role->update([
            'name' => $this->name,
        ]);

        $permissions = Permission::findMany($this->selectedPermissions);
        $role->syncPermissions($permissions);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyUpdated($role);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->name = '';
        $this->selectedPermissions = [];
    }

    public function render()
    {
        return view('livewire.admin.roles.role-add-update-modal');
    }
}
