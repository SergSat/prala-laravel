<?php

namespace App\Livewire\Role;


use App\Livewire\Traits\HandlesCRUD;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use App\Models\Role;

class RolesManager extends Component
{
    use HandlesCRUD;

    public function mount()
    {
        $this->modelClass = Role::class;
        $this->columns = ['name', 'permissions_label'];
        $this->modelAddUpdateClass = RoleAddUpdateModal::class;
        $this->dispatchEventBaseName = 'role';
        $this->loadResources();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.roles.roles-manager');
    }

}
