<?php

namespace App\Livewire\Admin\News;

use App\Livewire\Traits\HandlesCRUD;
use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class NewsManager extends Component
{
    use HandlesCRUD;

    use WithPagination;

    public function mount()
    {
        $this->model = News::class;
        $this->columns = ['title', 'content', 'created_at'];
        $this->modelAddUpdateClass = NewsAddUpdateModal::class;
        $this->dispatchEventBaseName = 'news';
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        $elements = $this->model::paginate($this->perPage);

        $elements->each(function ($item) {
            $item->content = strip_tags($item->content);
            $item->content = Str::limit($item->content, 100);
        });

        return view('livewire.admin.news.news-manager', [
            'elements' => $elements,
        ]);
    }
}
