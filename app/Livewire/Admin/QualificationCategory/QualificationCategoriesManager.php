<?php

namespace App\Livewire\Admin\QualificationCategory;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\QualificationCategory;
use App\Services\QualificationCategoryService;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class QualificationCategoriesManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = QualificationCategory::class;
        $this->columns = ['name_with_dashes', 'assigned_profession'];
        $this->modelAddUpdateClass = QualificationCategoryAddUpdateModal::class;
        $this->dispatchEventBaseName = 'qualification-category';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.qualification-category.qualification-categories-manager', [
            'elements' => $this->model::orderBy('path')->paginate($this->perPage),
        ]);
    }
}
