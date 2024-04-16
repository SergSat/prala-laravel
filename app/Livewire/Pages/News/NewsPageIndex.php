<?php

namespace App\Livewire\Pages\News;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class NewsPageIndex extends Component
{
    use WithPagination;

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
        array_unshift($this->breadcrumbs, ['title' => __('blog'), 'url' => '#']);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.news.news-page-index', [
            'news' => News::latest()->paginate(6),
        ]);
    }
}
