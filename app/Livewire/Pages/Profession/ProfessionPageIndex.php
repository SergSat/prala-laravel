<?php

namespace App\Livewire\Pages\Profession;

use App\Models\Profession;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProfessionPageIndex extends Component
{
    public $breadcrumbs = [];

    public function mount()
    {
        $this->generateBreadcrumbs();
    }

    /**
     * Get the breadcrumbs
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        $this->breadcrumbs = [];
        array_unshift($this->breadcrumbs, ['title' => __('employees_list_with_contacts'), 'url' => '#']);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.profession.profession-page-index', [
            'professions' => Profession::all(),
        ]);
    }
}
