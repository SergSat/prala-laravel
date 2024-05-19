<?php

namespace App\Livewire\Admin\MaterialCategory;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Material;
use App\Models\MaterialCategory;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class MaterialCategoriesManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = MaterialCategory::class;
        $this->columns = ['name_with_dashes'];
        $this->modelAddUpdateClass = MaterialCategoryAddUpdateModal::class;
        $this->dispatchEventBaseName = 'material-category';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.material-category.material-categories-manager', [
            'elements' => $this->model::orderBy('path')->paginate($this->perPage),
        ]);
    }
}
