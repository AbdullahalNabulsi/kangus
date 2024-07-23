<?php

namespace App\Observers;

use App\Models\Country;

class CountryObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Country $country): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Country $country): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Country $country): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Country $country): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Country $country): void
    {
        //
    }
}
