<?php

namespace App\Observers;

use App\Models\ProductType;

class ProductTypeObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(ProductType $productType): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(ProductType $productType): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(ProductType $productType): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(ProductType $productType): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(ProductType $productType): void
    {
        //
    }
}
