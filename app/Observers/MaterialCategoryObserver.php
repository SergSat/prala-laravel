<?php

namespace App\Observers;

use App\Models\MaterialCategory;

class MaterialCategoryObserver
{
    /**
     * Handle the MaterialCategory "creating" event.
     */
    public function saving(MaterialCategory $category): void
    {
        if ($category->isDirty('parent_id') || $category->wasRecentlyCreated) {
            $category->updatePath();
        }
    }

    /**
     * Handle the MaterialCategory "saved" event.
     */
    public function saved(MaterialCategory $category)
    {
        if ($category->wasChanged('parent_id') || $category->wasRecentlyCreated) {
            $category->updateChildrenPath();
        }
    }

    /**
     * Handle the MaterialCategory "created" event.
     */
    public function created(MaterialCategory $materialCategory): void
    {
        $materialCategory->updatePath();
        $materialCategory->save();
    }

    /**
     * Handle the MaterialCategory "updated" event.
     */
    public function updated(MaterialCategory $materialCategory): void
    {
        if ($materialCategory->wasChanged('parent_id')) {
            $materialCategory->updateChildrenPath();
        }
    }

    /**
     * Handle the MaterialCategory "deleted" event.
     */
    public function deleted(MaterialCategory $materialCategory): void
    {
        //
    }

    /**
     * Handle the MaterialCategory "restored" event.
     */
    public function restored(MaterialCategory $materialCategory): void
    {
        //
    }

    /**
     * Handle the MaterialCategory "force deleted" event.
     */
    public function forceDeleted(MaterialCategory $materialCategory): void
    {
        //
    }
}
