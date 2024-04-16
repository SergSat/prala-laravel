<?php

namespace App\Livewire\Admin\QualificationCategory;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Profession;
use App\Models\QualificationCategory;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class QualificationCategoryAddUpdateModal extends Component
{
    use NotifyCRUD;

    public $show = false;

    public $id = null;
    public $name = null;
    public $parentId = null;
    public $selectedCategories = [];
    public $search = '';
    public $professions = [];
    public $professionId = null;

    public function mount()
    {
        $this->professions = Profession::all();
    }

    #[On('qualification-category-create')]
    public function showCreate(): void
    {
        $this->resetInput();
        $this->search = '';
        $this->show = true;
    }

    #[On('qualification-category-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $cat = QualificationCategory::find($id);
        if (!$cat)
            return;

        $this->id = $cat->id;
        $this->name = $cat->name;
        $this->parentId = $cat->parent->id ?? null;
        $this->search = $cat->parent->name ?? null;

        $this->professionId = $cat->profession->id ?? null;

        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'parentId' => 'nullable|exists:qualification_categories,id',
            'professionId' => 'nullable|exists:professions,id',
        ]);

        // Save model
        $created_cat = QualificationCategory::create([
            'name' => $this->name,
            'parent_id' => $this->parentId,
            'profession_id' => $this->professionId ?? null
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created_cat);
    }

    public function update($id)
    {
        $cat = QualificationCategory::find($id);

        if (!$cat)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'parentId' => 'nullable|exists:qualification_categories,id',
            'professionId' => 'nullable|exists:professions,id',
        ]);

        // Save qualification
        $updated = $cat->update([
            'name' => $this->name,
            'parent_id' => $this->parentId,
            'profession_id' => $this->professionId,
        ]);

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated);
    }

    /**
     * Search for items
     * @return void
     */
    public function updatedSearch()
    {
        if (strlen(trim($this->search)) < 1) {
            $this->selectedCategories = [];
            return;
        }

        $rootCategoriesCount = QualificationCategory::whereNull('parent_id')->count();
        $currentCategory = QualificationCategory::find($this->id);
        $isCurrentCategoryRoot = is_null($currentCategory->parent_id ?? null);

        if ($currentCategory && $isCurrentCategoryRoot && $rootCategoriesCount <= 1) {
            $this->js('alert("'.__('admin.last_root_cannot_be_child').'")');
            return;
        }


        $this->selectedCategories = QualificationCategory::where('name', 'like', '%' . trim($this->search) . '%')
            ->where('id', '!=', $this->id)
            ->get();
    }

    /**
     * Select category
     * @param $id
     * @param $name
     */
    public function selectCategory($id, $name)
    {
        $this->parentId = $id;
        $this->search = $name;
        $this->selectedCategories = [];
    }

    private function resetInput()
    {
        $this->id = null;
        $this->name = '';
        $this->parentId = null;
    }

    public function render()
    {
        return view('livewire.admin.qualification-category.qualification-category-add-update-modal');
    }
}
