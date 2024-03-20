<?php
namespace App\Livewire\Traits;

use Livewire\Attributes\On;

trait HandlesCRUD
{
    public $modelClass;
    public $modelAddUpdateClass;
    public $dispatchEventBaseName;
    public array $columns;
    public $items;
    public $wrappers = [];

    #[On('update-component')]
    public function loadResources()
    {
        $this->items = $this->modelClass::all();
    }

    public function create()
    {
        $this->dispatch($this->dispatchEventBaseName . '-create')->to($this->modelAddUpdateClass);
    }

    public function edit($id)
    {
        $this->dispatch($this->dispatchEventBaseName . '-edit', $id)->to($this->modelAddUpdateClass);
    }

    public function delete($id)
    {
        if ($model = $this->modelClass::find($id)) {
            $deleted = $model->delete();
            $this->loadResources();

            if ($deleted) {
                $status = 'success';
                $message = __('alert.element_successfully_deleted');
            } else {
                $status = 'danger';
                $message = __('alert.element_not_successfully_deleted');
            }
            $this->dispatch('notify', status: $status, message: $message);
        }
    }

}
