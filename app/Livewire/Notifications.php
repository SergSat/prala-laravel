<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Notifications extends Component
{
    public $notifications = [];

    public function mount()
    {
        //
    }


    #[On('notify')]
    public function addNotification($status, $message)
    {
        $this->notifications[] = [
            'status' => $status,
            'message' => $message,
        ];
    }

    public function close($key)
    {
        unset($this->notifications[$key]);
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.notifications');
    }
}
