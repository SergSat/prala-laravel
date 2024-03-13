<?php

namespace App\Livewire\Role;


use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesManager extends Component
{
    public $roles, $permissions, $roleName, $selectedPermissions = [], $editingRoleId = null;

    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    public function createRole()
    {
        $role = Role::create(['name' => $this->roleName]);

        $permissions = Permission::whereIn('id', $this->selectedPermissions)->get();

        $role->givePermissionTo($permissions); // Назначение разрешений роли

        $this->resetInput();
    }

    public function editRole($roleId)
    {
        $role = Role::findById($roleId);
        $this->roleName = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('id')->toArray();
        $this->editingRoleId = $roleId;
    }

    public function updateRole()
    {
        $role = Role::findById($this->editingRoleId);
        $role->name = $this->roleName;
        $role->save();

        $permissions = Permission::whereIn('id', $this->selectedPermissions)->get();
        $role->syncPermissions($permissions);

        $this->resetInput();
        $this->mount();
    }

    public function deleteRole($roleId)
    {
        Role::findById($roleId)->delete();
        $this->mount();
    }

    private function resetInput()
    {
        $this->roleName = '';
        $this->selectedPermissions = [];
        $this->editingRoleId = null;
        $this->mount();
    }

    public function render()
    {
        return view('livewire.admin.roles.roles-manager');
    }
}
