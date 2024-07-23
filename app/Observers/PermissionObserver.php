<?php

namespace App\Observers;

use App\Models\Permission;

class PermissionObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Permission $permission): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Permission $permission): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Permission $permission): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Permission $permission): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Permission $permission): void
    {
        //
    }
}
