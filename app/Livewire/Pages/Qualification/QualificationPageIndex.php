<?php

namespace App\Livewire\Pages\Qualification;

use App\Models\Qualification;
use App\Models\QualificationCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class QualificationPageIndex extends Component
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
            $this->currentCategory = QualificationCategory::with('subcategories')->find($this->categoryId);
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
            $category = QualificationCategory::find($this->categoryId);
            while ($category) {
                array_unshift($this->breadcrumbs, ['title' => $category->name, 'url' => route('responsibilities.index', ['categoryId' => $category->id])]);
                $category = $category->parent;
            }
        }
        array_unshift($this->breadcrumbs, ['title' => __('responsibilities_and_competencies'), 'url' => route('responsibilities.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $query = Qualification::latest();
        if ($this->categoryId) {
            $query->whereHas('qualificationCategory', function ($query) {
                $query->where('id', $this->currentCategory->id)
                    ->orWhere('parent_id', $this->currentCategory->id);
            });

            $this->currentCategory = QualificationCategory::find($this->categoryId);
        }
        $qualifications = $query->paginate(6);

        $this->generateBreadcrumbs();

        return view('livewire.pages.qualification.qualification-page-index', [
            'qualifications' => $qualifications,
            'categories' => QualificationCategory::where('parent_id', null)->with('subcategories')->get(),
        ]);
    }
}
