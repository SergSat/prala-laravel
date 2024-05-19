<?php

namespace App\Livewire\Admin\Material;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Material;
use App\Services\MaterialCategoryService;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaterialAddUpdateModal extends Component
{
    use NotifyCRUD;
    use WithFileUploads;

    public $show = false;

    public $id = null;
    public $title = null;
    public $categoryId = null;
    public $categories = [];
    public $content = null;
    public $currentImagePath = null;

    public function mount()
    {
        //
    }

    #[On('material-create')]
    public function showCreate(): void
    {
        $this->resetInput();
        $this->dispatch('init-editor');
        $this->show = true;
    }

    #[On('material-edit')]
    public function showEdit($id)
    {
        $this->resetInput();

        $material = Material::find($id);
        if (!$material)
            return;

        $this->id = $material->id;
        $this->title = $material->title;
        $this->categoryId = $material->material_category_id;

        $this->content = $material->content;
        $this->currentImagePath = $material->image_path ?? null;

        $this->dispatch('init-editor');
        $this->show = true;
    }


    #[On('set-content')]
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:1',
            'categoryId' => 'nullable|exists:material_categories,id',
        ]);

        // Save model
        $created_material = Material::create([
            'title' => $this->title,
            'content' => $this->content,
            'material_category_id' => $this->categoryId,
        ]);

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created_material);
    }

    public function update($id)
    {
        $material = Material::find($id);

        if (!$material)
            return;

        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20',
            'categoryId' => 'nullable|exists:material_categories,id',
        ]);

        // Save material
        $updated = $material->update([
            'title' => $this->title,
            'content' => $this->content,
            'material_category_id' => $this->categoryId,
        ]);

        // Close modal and reset input fields
        $this->show = false;

        $this->dispatch('update-component');

        $this->notifyUpdated($updated);
    }

    private function resetInput()
    {
        $this->id = null;
        $this->title = '';
        $this->content = '';
        $this->categories = [];
    }

    public function loadResources()
    {
        $materialCategoryService = new MaterialCategoryService();
        $this->categories = $materialCategoryService->getCategoriesWithDashes();
    }

    public function render()
    {
        $this->loadResources();
        return view('livewire.admin.materials.material-add-update-modal');
    }
}
