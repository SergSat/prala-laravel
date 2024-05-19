<?php

namespace App\Livewire\Admin\Material;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Material;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class MaterialsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Material::class;
        $this->columns = ['title', 'content', 'category_path_name'];
        $this->modelAddUpdateClass = MaterialAddUpdateModal::class;
        $this->dispatchEventBaseName = 'material';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        $elements = $this->model::paginate($this->perPage);
        $elements->each(function ($item) {
            $item->content = cleanHtml(Str::limit($item->content, 50));
        });

        return view('livewire.admin.materials.materials-manager', [
            'elements' => $elements,
        ]);
    }
}
