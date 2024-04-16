<?php

namespace App\Policies;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfessionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Profession $profession): bool
    {
        return $user->hasPermissionTo('view profession');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create profession');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Profession $profession): bool
    {
        return $user->hasPermissionTo('edit profession');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Profession $profession): bool
    {
        return $user->hasPermissionTo('delete profession');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Profession $profession): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Profession $profession): bool
    {
        //
    }
}
