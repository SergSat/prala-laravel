<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ConfirmationModal extends Component
{
    public $show = false;
    public $modelId;
    public $modelName;

    #[On('confirm-delete')]
    public function show($modelName, $modelId)
    {
        $this->modelName = $modelName;
        $this->modelId = $modelId;
        $this->show = true;
    }

    public function delete()
    {
        $this->modelName::find($this->modelId)->delete();

        $this->reset(['show', 'modelId', 'modelName']);

        $this->dispatch('update-component');
    }

    public function render()
    {
        return view('livewire.admin.confirmation-modal');
    }
}
