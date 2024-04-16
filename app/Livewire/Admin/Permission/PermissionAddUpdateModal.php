<?php

namespace App\Livewire\Admin\Permission;

use App\Livewire\Traits\NotifyCRUD;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionAddUpdateModal extends Component
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
        $this->resetInput();
    }

    #[On('permission-create')]
    public function showCreate()
    {
        $this->resetInput();
        $this->show = true;
    }

    #[On('permission-edit')]
    public function showEdit($id)
    {
        $permission = Permission::find($id);
        if (!$permission)
            return;

        $this->id = $permission->id;
        $this->name = $permission->name;
        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
        ]);

        // Save permission
        $permission = Permission::create([
            'name' => $this->name,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($permission);

    }

    public function updatePermission($id)
    {
        $permission = Permission::find($id);

        if (!$permission)
            return;

        $this->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
        ]);

        // Permission update
        $permission->update([
            'name' => $this->name,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        $this->dispatch('update-component');

        // Notify
        $this->notifyUpdated($permission);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->name = '';
        $this->selectedPermissions = [];
    }

    public function render()
    {
        return view('livewire.admin.permissions.permission-add-update-modal');
    }
}
