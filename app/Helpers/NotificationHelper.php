<?php
if (!function_exists('notify')) {
    /**
     * Send notification
     *
     * @param  bool  $updated Status of the operation
     * @return void
     */
    function notify($updated, $successMessage = 'alert.element_successfully_updated', $failureMessage = 'alert.element_not_successfully_updated') {
        $status = $updated ? 'success' : 'danger';
        $message = $updated ? __($successMessage) : __($failureMessage);

        session()->flash('notify', ['status' => $status, 'message' => $message]);
    }
}
