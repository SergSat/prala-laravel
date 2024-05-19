<?php

namespace App\Livewire\Pages\Material;

use App\Models\Material;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MaterialPageShow extends Component
{
    public $id;
    public $breadcrumbs = [];

    public function mount($id)
    {
        $this->id = $id;
        $this->generateBreadcrumbs();
    }

    /**
     * Get the breadcrumbs
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        $material = Material::find($this->id);
        if ($material) {
            array_unshift($this->breadcrumbs, ['title' => $material->title, 'url' => route('library.show', $material->id)]);
        }
        array_unshift($this->breadcrumbs, ['title' => __('library'), 'url' => route('library.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.material.material-page-show', [
            'item' => Material::find($this->id),
        ]);
    }
}
