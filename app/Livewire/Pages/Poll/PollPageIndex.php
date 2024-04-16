<?php

namespace App\Livewire\Pages\Poll;

use App\Models\Poll;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PollPageIndex extends Component
{
    public $polls;
    public $lastPoll;
    public $finishedPolls;
    public $unfinishedPolls;
    public $breadcrumbs = [];

    public function mount()
    {
        $this->polls = Poll::with('options')->get();
        $this->lastPoll = Poll::with('options')->where('finished', 0)->latest()->first();
        $this->finishedPolls = Poll::with('options')->where('finished', true)->get();
        $this->unfinishedPolls = Poll::with('options')->where('finished', false)->get();
        $this->generateBreadcrumbs();
    }

    /**
     * Get the breadcrumbs
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        array_unshift($this->breadcrumbs, ['title' => __('polls'), 'url' => '#']);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.poll.poll-page-index');
    }
}
