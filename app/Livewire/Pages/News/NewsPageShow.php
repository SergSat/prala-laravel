<?php

namespace App\Livewire\Pages\News;

use App\Models\News;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewsPageShow extends Component
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
        $news = News::find($this->id);
        if ($news) {
            array_unshift($this->breadcrumbs, ['title' => $news->title, 'url' => route('news.show', $news->id)]);
        }
        array_unshift($this->breadcrumbs, ['title' => __('blog'), 'url' => route('news.index')]);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.news.news-page-show', [
            'item' => News::find($this->id),
        ]);
    }
}
