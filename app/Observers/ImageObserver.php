<?php

namespace App\Observers;

use App\Models\Image;

class ImageObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Image $image): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Image $image): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Image $image): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Image $image): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Image $image): void
    {
        //
    }
}
