<?php

namespace App\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionsManager extends Component
{
    public $permissions;
    public $permissionName;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function createPermission()
    {
        Permission::create(['name' => $this->permissionName]);
        $this->permissions = Permission::all();
    }

    public function deletePermission($permissionId)
    {
        Permission::findById($permissionId)->delete();
        $this->permissions = Permission::all();
    }

    public function render()
    {
        return view('livewire.admin.permissions.permissions-manager');
    }
}
