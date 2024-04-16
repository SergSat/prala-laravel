<?php

namespace App\Policies;

use App\Models\QualificationCategory;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class QualificationCategoryPolicy
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
    public function view(User $user, QualificationCategory $qualificationCategory): bool
    {
        return $user->hasPermissionTo('view qualification_category');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create qualification_category');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, QualificationCategory $qualificationCategory): bool
    {
        return $user->hasPermissionTo('edit qualification_category');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, QualificationCategory $qualificationCategory): bool
    {
        return $user->hasPermissionTo('delete qualification_category');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, QualificationCategory $qualificationCategory): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, QualificationCategory $qualificationCategory): bool
    {
        //
    }
}
