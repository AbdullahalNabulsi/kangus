<?php

namespace App\Observers;

use App\Models\Unit;

class UnitObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Unit $unit): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Unit $unit): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Unit $unit): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Unit $unit): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Unit $unit): void
    {
        //
    }
}
