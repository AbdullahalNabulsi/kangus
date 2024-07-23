<?php

namespace App\Observers;

use App\Models\ServiceOrder;

class ServiceOrderObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(ServiceOrder $serviceOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(ServiceOrder $serviceOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(ServiceOrder $serviceOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(ServiceOrder $serviceOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(ServiceOrder $serviceOrder): void
    {
        //
    }
}
