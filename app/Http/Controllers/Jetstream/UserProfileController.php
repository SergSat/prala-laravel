<?php

namespace App\Http\Controllers\Jetstream;

use Illuminate\Http\Request;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController as UserProfileControllerJetstream;

class UserProfileController extends UserProfileControllerJetstream
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        return view('admin.profile.show', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
