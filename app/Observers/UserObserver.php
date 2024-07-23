<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(User $user): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
