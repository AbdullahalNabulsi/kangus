<?php

namespace App\Observers;

use App\Models\ProductOrder;

class ProductOrderObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(ProductOrder $productOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(ProductOrder $productOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(ProductOrder $productOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(ProductOrder $productOrder): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(ProductOrder $productOrder): void
    {
        //
    }
}
