<?php

namespace App\Livewire\Admin\Qualification;

use App\Livewire\Traits\NotifyCRUD;
use App\Models\Qualification;
use App\Services\QualificationCategoryService;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class QualificationAddUpdateModal extends Component
{
    use NotifyCRUD;
    use WithFileUploads;

    public $show = false;

    public $trixId;
    public $id = null;
    public $title = null;
    public $categoryId = null;
    public $categories = [];
    public $content = null;
    public $imagePath = null;
    public $currentImagePath = null;

    public function mount()
    {
        //
    }

    #[On('qualification-create')]
    public function showCreate(): void
    {
        $this->resetInput();

        $this->show = true;
    }

    #[On('qualification-edit')]
    public function showEdit($id)
    {
        $this->trixId = uniqid();
        $this->resetInput();

        $qualification = Qualification::find($id);
        if (!$qualification)
            return;

        $this->id = $qualification->id;
        $this->title = $qualification->title;
        $this->categoryId = $qualification->qualification_category_id;

        $this->content = $qualification->content;
        $this->currentImagePath = $qualification->image_path ?? null;
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
            'imagePath' => 'nullable|image|max:2048',
            'categoryId' => 'nullable|exists:qualification_categories,id',
        ]);

        // Save model
        $created_qualification = Qualification::create([
            'title' => $this->title,
            'content' => $this->content,
            'qualification_category_id' => $this->categoryId,
        ]);

        // Save photo
        if ($this->imagePath) {
            $created_qualification->image_path = $this->imagePath->store('qualifications', 'public');
            $created_qualification->save();
        }

        // Close modal and reset input fields
        $this->resetInput();
        $this->show = false;

        // Update component
        $this->dispatch('update-component');

        // Notify
        $this->notifyCreated($created_qualification);
    }

    public function updateQualification($id)
    {
        $qualification = Qualification::find($id);

        if (!$qualification)
            return;

        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20',
            'imagePath' => 'nullable|image|max:2048',
            'categoryId' => 'nullable|exists:qualification_categories,id',
        ]);

        // Save qualification
        $updated = $qualification->update([
            'title' => $this->title,
            'content' => $this->content,
            'qualification_category_id' => $this->categoryId,
        ]);

        // Save image
        if ($this->imagePath) {
            // Optionally delete the old image
            if ($qualification->image_path) {
                Storage::disk('public')->delete($qualification->image_path);
            }

            $qualification->image_path = $this->imagePath->store('qualifications', 'public');
            $qualification->save();
        }

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
        $this->imagePath = null;
        $this->categories = [];
    }

    public function loadResources()
    {
        $qualificationCategoryService = new QualificationCategoryService();
        $this->categories = $qualificationCategoryService->getCategoriesWithDashes();
    }

    public function render()
    {
        $this->loadResources();
        return view('livewire.admin.qualifications.qualification-add-update-modal');
    }
}
