<?php

namespace App\Livewire\Admin\MaterialCategory;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\MaterialCategory;
use Livewire\Attributes\On;
use Livewire\Component;

class MaterialCategoryAddUpdateModal extends Component
{
    use NotifyCRUD;

    public $show = false;

    public $id = null;
    public $name = null;
    public $parentId = null;
    public $selectedCategories = [];
    public $search = '';

    public function mount()
    {
       //
    }

    #[On('material-category-create')]
    public function showCreate(): void
    {
        $this->resetInput();
        $this->search = '';
        $this->show = true;
    }

    #[On('material-category-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $cat = MaterialCategory::find($id);
        if (!$cat)
            return;

        $this->id = $cat->id;
        $this->name = $cat->name;
        $this->parentId = $cat->parent->id ?? null;
        $this->search = $cat->parent->name ?? null;

        $this->show = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'parentId' => 'nullable|exists:material_categories,id',
        ]);

        // Save model
        $created_cat = MaterialCategory::create([
            'name' => $this->name,
            'parent_id' => $this->parentId,
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
        $cat = MaterialCategory::find($id);

        if (!$cat)
            return;

        $this->validate([
            'name' => 'required|string|max:255',
            'parentId' => 'nullable|exists:material_categories,id',
        ]);

        // Save material category
        $updated = $cat->update([
            'name' => $this->name,
            'parent_id' => $this->parentId,
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

        $rootCategoriesCount = MaterialCategory::whereNull('parent_id')->count();
        $currentCategory = MaterialCategory::find($this->id);
        $isCurrentCategoryRoot = is_null($currentCategory->parent_id ?? null);

        if ($currentCategory && $isCurrentCategoryRoot && $rootCategoriesCount <= 1) {
            $this->js('alert("'.__('admin.last_root_cannot_be_child').'")');
            return;
        }


        $this->selectedCategories = MaterialCategory::where('name', 'like', '%' . trim($this->search) . '%')
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
        return view('livewire.admin.material-category.material-category-add-update-modal');
    }
}
