<?php

namespace App\Observers;

use App\Models\Address;

class AddressObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Address $address): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Address $address): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Address $address): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Address $address): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Address $address): void
    {
        //
    }
}
