<?php

namespace App\Livewire\Pages\Material;

use App\Models\Material;
use App\Models\MaterialCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class MaterialPageIndex extends Component
{
    use WithPagination;

    public $categoryId = null;
    public $currentCategory = null;
    public $breadcrumbs = [];

    protected $queryString = [
        'categoryId' => ['except' => '']
    ];

    public function mount($categoryId = null)
    {
        $this->categoryId = $categoryId ?? request()->query('categoryId');
        $this->setCategory($this->categoryId);
    }

    /**
     * Set the category for the qualification.
     *
     * @param int|null $categoryId
     */
    #[On('set-category')]
    public function setCategory($categoryId = null)
    {
        if ($categoryId === null) {
            $this->reset('categoryId');
        } else {
            $this->categoryId = $categoryId;
            $this->currentCategory = MaterialCategory::with('subcategories')->find($this->categoryId);
        }
        $this->resetPage();
    }

    /**
     * Get the breadcrumbs for the category.
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        $this->breadcrumbs = [];
        if ($this->categoryId) {
            $category = MaterialCategory::find($this->categoryId);
            while ($category) {
                array_unshift($this->breadcrumbs, ['title' => $category->name, 'url' => route('library.index', ['categoryId' => $category->id])]);
                $category = $category->parent;
            }
        }
        array_unshift($this->breadcrumbs, ['title' => __('library'), 'url' => route('library.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $query = Material::latest();
        if ($this->categoryId) {
            $query->whereHas('category', function ($query) {
                $query->where('id', $this->currentCategory->id)
                    ->orWhere('parent_id', $this->currentCategory->id);
            });

            $this->currentCategory = MaterialCategory::find($this->categoryId);
        }
        $materials = $query->paginate(6);

        $this->generateBreadcrumbs();

        return view('livewire.pages.material.material-page-index', [
            'materials' => $materials,
            'categories' => MaterialCategory::where('parent_id', null)->with('subcategories')->get(),
        ]);
    }
}
