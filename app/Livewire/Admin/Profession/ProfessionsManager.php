<?php

namespace App\Livewire\Admin\Profession;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Profession;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ProfessionsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Profession::class;
        $this->columns = ['name', 'description'];
        $this->modelAddUpdateClass = ProfessionAddUpdateModal::class;
        $this->dispatchEventBaseName = 'profession';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.profession.professions-manager', [
            'elements' => $this->model::paginate($this->perPage),
        ]);
    }
}
