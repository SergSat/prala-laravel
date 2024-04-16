<?php

namespace App\Livewire\Pages\Profession;

use App\Models\Profession;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ProfessionPageShow extends Component
{
    use WithPagination;

    public $professionId;
    public $breadcrumbs = [];

    public function mount($id)
    {
        $this->professionId = $id;
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
        $profession = Profession::find($this->professionId);
        if ($profession) {
            array_unshift($this->breadcrumbs, ['title' => $profession->name, 'url' => '#']);
        }
        array_unshift($this->breadcrumbs, ['title' => __('employees_list_with_contacts'), 'url' => route('professions.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $profession = cache()->remember("profession-{$this->professionId}", 60*60, function () {
            return Profession::with('users')->find($this->professionId);
        });

        if (!$profession) {
            abort(404, 'Profession not found.');
        }

        $users = $profession->users()->paginate(12);

        return view('livewire.pages.profession.profession-page-show', [
            'profession' => $profession,
            'users' => $users,
        ]);
    }
}
