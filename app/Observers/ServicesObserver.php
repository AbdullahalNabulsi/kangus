<?php

namespace App\Observers;

use App\Models\Services;

class ServicesObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Services $services): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Services $services): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Services $services): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Services $services): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Services $services): void
    {
        //
    }
}
