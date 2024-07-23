<?php

namespace App\Observers;

use App\Models\Tools;

class ToolsObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Tools $tools): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Tools $tools): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Tools $tools): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Tools $tools): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Tools $tools): void
    {
        //
    }
}
