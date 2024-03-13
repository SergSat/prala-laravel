<?php
namespace App\Livewire\Traits;

trait ConfirmableDeleteTrait
{
    public $show = false;
    public $deletingId;

    public function confirmDeleting($id)
    {
        $this->deletingId = $id;
        $this->show = true;
    }

    public function deleting()
    {
        if (method_exists($this, 'delete')) {
            $this->delete($this->deletingId);
        }

        $this->show = false;
        $this->deletingId = null;
    }
}
