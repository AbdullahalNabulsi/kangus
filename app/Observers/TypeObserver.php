<?php

namespace App\Observers;

use App\Models\Type;

class TypeObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Type $type): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Type $type): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Type $type): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Type $type): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Type $type): void
    {
        //
    }
}
