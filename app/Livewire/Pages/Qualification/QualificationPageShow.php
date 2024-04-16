<?php

namespace App\Livewire\Pages\Qualification;

use App\Models\Qualification;
use Livewire\Attributes\Layout;
use Livewire\Component;

class QualificationPageShow extends Component
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
        $qualification = Qualification::find($this->id);
        if ($qualification) {
            array_unshift($this->breadcrumbs, ['title' => $qualification->title, 'url' => route('responsibilities.show', $qualification->id)]);
        }
        array_unshift($this->breadcrumbs, ['title' => __('responsibilities_and_competencies'), 'url' => route('responsibilities.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.qualification.qualification-page-show', [
            'item' => Qualification::find($this->id),
        ]);
    }
}
