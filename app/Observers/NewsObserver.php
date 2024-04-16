<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsObserver
{
    /**
     * Handle the News "created" event.
     */
    public function created(News $news): void
    {
        //
    }

    /**
     * Handle the News "updated" event.
     */
    public function updated(News $news): void
    {
        //
    }


    /**
     * Handle the News "deleted" event.
     */
    public function deleted(News $news): void
    {
        if ($news->image_path) {
            Storage::disk('public')->delete($news->image_path);
        }
    }

    /**
     * Handle the News "restored" event.
     */
    public function restored(News $news): void
    {
        //
    }

    /**
     * Handle the News "force deleted" event.
     */
    public function forceDeleted(News $news): void
    {
        //
    }
}
