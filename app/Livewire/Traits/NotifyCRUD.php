<?php
namespace App\Livewire\Traits;

trait NotifyCRUD
{
    public function notifyCreated($created)
    {
        if ($created) {
            $status = 'success';
            $message = __('alert.element_successfully_created');
        } else {
            $status = 'danger';
            $message = __('alert.element_not_successfully_created');
        }

        $this->dispatch('notify', status: $status, message: $message);
    }

    public function notifyUpdated($updated)
    {
        if ($updated) {
            $status = 'success';
            $message = __('alert.element_successfully_updated');
        } else {
            $status = 'danger';
            $message = __('alert.element_not_successfully_updated');
        }

        $this->dispatch('notify', status: $status, message: $message);
    }

    public function notifyDeleted($deleted)
    {
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
