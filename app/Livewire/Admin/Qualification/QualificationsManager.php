<?php

namespace App\Livewire\Admin\Qualification;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\Qualification;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class QualificationsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = Qualification::class;
        $this->columns = ['title', 'content', 'category_path_name'];
        $this->modelAddUpdateClass = QualificationAddUpdateModal::class;
        $this->dispatchEventBaseName = 'qualification';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        $elements = $this->model::paginate($this->perPage);
        $elements->each(function ($item) {
            $item->content = cleanHtml(Str::limit($item->content, 50));
        });

        return view('livewire.admin.qualifications.qualifications-manager', [
            'elements' => $elements,
        ]);
    }
}
