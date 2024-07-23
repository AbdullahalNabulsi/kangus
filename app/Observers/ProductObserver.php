<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function creating(Product $product): void
    {
        $last_uuid_product = Product::latest()->first();
        $product->uuid = $last_uuid_product->uuid + 1;
    }
    
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Product $product): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Product $product): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Product $product): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Product $product): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        //
    }
}
