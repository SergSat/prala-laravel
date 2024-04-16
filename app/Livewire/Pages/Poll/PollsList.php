<?php

namespace App\Livewire\Pages\Poll;

use App\Models\Poll;
use Livewire\Component;

class PollsList extends Component
{
    public $polls;
    public $specificPoll = null;
    public $displayMode = 'latest'; // latest, specific, unfinished, finished

    public function mount($poll = null, $mode = 'latest')
    {
        $this->displayMode = $mode;
        $this->specificPoll = $poll;
        $this->loadPolls();
    }

    public function loadPolls()
    {
        switch ($this->displayMode) {
            case 'latest':
                $this->polls = [Poll::with('options')->latest()->first()];
                break;
            case 'specific':
                $this->polls = $this->specificPoll ? [Poll::with('options')->find($this->specificPoll)] : null;
                break;
            case 'unfinished':
                $this->polls = Poll::with('options')->where('finished', false)->get();
                break;
            case 'finished':
                $this->polls = Poll::with('options')->where('finished', true)->get();
                break;
        }
    }

    public function render()
    {
        return view('livewire.pages.poll.polls-list');
    }
}
