<?php

namespace App\Observers;

use App\Models\City;

class CityObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(City $city): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(City $city): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(City $city): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(City $city): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(City $city): void
    {
        //
    }
}
