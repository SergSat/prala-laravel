<?php

namespace App\Livewire\Admin\Permission;

use App\Livewire\Traits\HandlesCRUD;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class PermissionsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Permission::class;
        $this->columns = ['name'];
        $this->modelAddUpdateClass = PermissionAddUpdateModal::class;
        $this->dispatchEventBaseName = 'permission';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.permissions.permissions-manager', [
            'elements' => $this->model::paginate($this->perPage),
        ]);
    }

}
