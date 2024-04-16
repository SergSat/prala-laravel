<?php

namespace App\Livewire\Pages\Poll;

use App\Models\Poll;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UnfinishedPollPageShow extends Component
{
    public $id;
    public $poll;
    public $nextPoll;
    public $previousPoll;
    public $breadcrumbs = [];

    public function mount($id)
    {
        $this->id = $id;
        $this->poll = Poll::with('options')->find($id);
        $this->nextPoll = $this->getNextPoll($id);
        $this->previousPoll = $this->getPreviousPoll($id);
        $this->generateBreadcrumbs();
    }

    /**
     * Get the breadcrumbs
     *
     * @return void
     */
    public function generateBreadcrumbs()
    {
        $poll = Poll::find($this->id);
        if ($poll) {
            array_unshift($this->breadcrumbs, ['title' => $poll->title, 'url' => route('unfinished-polls.show', $poll->id)]);
        }
        array_unshift($this->breadcrumbs, ['title' => __('polls'), 'url' => route('polls.index')]);
    }

    /**
     * Get the next poll
     *
     * @param  int $id
     * @return Poll
     */
    public function getNextPoll($id)
    {
        return Poll::unfinished()->where('id', '>', $id)->orderBy('id', 'asc')->first();
    }

    /**
     * Get the previous poll
     *
     * @param  int $id
     * @return Poll
     */
    public function getPreviousPoll($id)
    {
        return Poll::unfinished()->where('id', '<', $id)->orderBy('id', 'desc')->first();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.poll.poll-page-show');
    }
}
