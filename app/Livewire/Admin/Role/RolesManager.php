<?php

namespace App\Livewire\Admin\Role;


use App\Livewire\Traits\HandlesCRUD;
use App\Models\Role;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class RolesManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Role::class;
        $this->columns = ['name', 'permissions_label'];
        $this->modelAddUpdateClass = RoleAddUpdateModal::class;
        $this->dispatchEventBaseName = 'role';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.roles.roles-manager', [
            'elements' => $this->model::paginate($this->perPage),
        ]);
    }
}
