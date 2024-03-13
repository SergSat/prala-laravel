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
    public function confirmDeleting($modelName, $modelId)
    {
        $this->modelName = $modelName;
        $this->modelId = $modelId;
        $this->show = true;
    }

    public function delete()
    {
        // Выполните удаление объекта здесь, используя $this->modelName и $this->modelId
        $this->modelName::find($this->modelId)->delete();

        // Сбросить состояние модального окна после удаления
        $this->reset(['show', 'modelId', 'modelName']);

        $this->dispatch('update-list', modelId: $this->modelId);
    }

    public function modelDeleted($modelId)
    {
        // Логика, которая должна выполниться после удаления пользователя
        // Например, можно закрыть модальное окно или выполнить другие действия
    }

    public function render()
    {
        return view('livewire.admin.confirmation-modal');
    }
}
