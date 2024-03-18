<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ConfirmationModal extends Component
{
    public $show = false;
    public $modelId;
    public $model;

    #[On('confirm-delete')]
    public function show($model, $modelId)
    {
        dd($model);
        $this->model = $model;
        $this->modelId = $modelId;
        $this->show = true;
    }

    public function delete()
    {
        $this->model->delete();

        $this->reset(['show', 'modelId', 'modelName']);

        $this->dispatch('update-component');
    }

    public function render()
    {
        return view('livewire.admin.confirmation-modal');
    }
}
