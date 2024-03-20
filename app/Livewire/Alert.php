<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Alert extends Component
{
    public $message;
    public $status;
    public $show = false;

    public function mount()
    {
        $this->message = '$message';
        $this->type = '$type';
    }

    #[On('flesh-alert')]
    public function show($message, $type)
    {
        dd('flesh-alert');
        $this->message = $message;
        $this->type = $type;
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
