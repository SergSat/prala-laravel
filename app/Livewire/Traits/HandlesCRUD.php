<?php
namespace App\Livewire\Traits;

use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\On;

trait HandlesCRUD
{
    public $model;
    public $modelAddUpdateClass;
    public $dispatchEventBaseName;
    public array $columns;
    public $items;
    public $wrappers = [];
    public $perPage = 10;

    #[On('update-component')]
    public function loadResources()
    {
        $this->items = $this->model::all();
    }

    /**
     * Send event for opening modal for creating
     *
     * @return void
     */
    public function create()
    {
        $this->dispatch($this->dispatchEventBaseName . '-create')->to($this->modelAddUpdateClass);
    }

    /**
     * Send event for opening modal for editing
     *
     * @param int $id
     */
    public function edit($id)
    {
        $this->dispatch($this->dispatchEventBaseName . '-edit', $id)->to($this->modelAddUpdateClass);
    }

    /**
     * Delete model directly
     *
     * @param int $id
     */
    public function delete($id)
    {
        if ($model = $this->model::find($id)) {
            $deleted = $model->delete();

            $status = $deleted ? 'success' : 'danger';
            $message = $deleted ? __('alert.element_successfully_deleted') : __('alert.element_not_successfully_deleted');

            $this->dispatch('notify', status: $status, message: $message);
        }
    }

}
