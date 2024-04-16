<?php

namespace App\Observers;

use App\Models\QualificationCategory;

class QualificationCategoryObserver
{
    /**
     * Handle the QualificationCategory "creating" event.
     */
    public function saving(QualificationCategory $category): void
    {
        if ($category->isDirty('parent_id') || $category->wasRecentlyCreated) {
            $category->updatePath();
        }
    }

    /**
     * Handle the QualificationCategory "saved" event.
     */
    public function saved(QualificationCategory $category)
    {
        if ($category->wasChanged('parent_id') || $category->wasRecentlyCreated) {
            $category->updateChildrenPath();
        }
    }

    /**
     * Handle the QualificationCategory "created" event.
     */
    public function created(QualificationCategory $qualificationCategory): void
    {
        $qualificationCategory->updatePath();
        $qualificationCategory->save();
    }

    /**
     * Handle the QualificationCategory "updated" event.
     */
    public function updated(QualificationCategory $qualificationCategory): void
    {
        if ($qualificationCategory->wasChanged('parent_id')) {
            $qualificationCategory->updateChildrenPath();
        }
    }

    /**
     * Handle the QualificationCategory "deleted" event.
     */
    public function deleted(QualificationCategory $qualificationCategory): void
    {
        //
    }

    /**
     * Handle the QualificationCategory "restored" event.
     */
    public function restored(QualificationCategory $qualificationCategory): void
    {
        //
    }

    /**
     * Handle the QualificationCategory "force deleted" event.
     */
    public function forceDeleted(QualificationCategory $qualificationCategory): void
    {
        //
    }
}
