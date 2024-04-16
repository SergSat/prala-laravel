<?php

namespace App\Livewire\Pages\Poll;

use App\Models\Poll;
use App\Models\Vote;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SinglePoll extends Component
{
    /**
     * Poll model
     *
     * @var mixed
     */
    public Poll $poll;

    /**
     * User ID
     *
     * @var mixed
     */
    public $userId;

    /**
     * Voted status
     *
     * @var bool
     */
    public $voted = false;

    /**
     * Mount the component
     *
     * @param mixed $poll
     * @return void
     */
    public $chosenOptionId = null;

    public function mount(Poll $poll)
    {
        $this->poll = $poll;
        $this->userId = auth()->id();
        $this->voted = $this->voted();
        $this->chosenOptionId = $this->chosenOptionId();
    }

    /**
     * Vote for a poll option
     *
     * @param int $id
     * @return void
     */
    public function vote($id)
    {
        if ($this->voted)
            return;

        $created = Vote::create([
            'option_id' => $id,
            'user_id' => $this->userId,
        ]);

        if ($created) {
            $this->voted = true;
            $this->chosenOptionId = $id;
        }
    }

    /**
     * Check if the user has voted
     *
     * @return bool
     */
    protected function voted()
    {
        return $this->chosenOptionId() ? true : false;
    }

    /**
     * Get the chosen option
     *
     * @return mixed
     */
    public function chosenOptionId()
    {
        $id = null;

        $option = $this->poll->options()->whereHas('votes', function ($query) {
            $query->where('user_id', auth()->id());
        })->first();

        if ($option) {
            $id = $option->id;
        }

        return $id;
    }

    public function render()
    {
        return view('livewire.pages.poll.single-poll');
    }
}
