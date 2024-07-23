<?php

namespace App\Observers;

use App\Models\Quotation;

class QuotationObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(Quotation $quotation): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(Quotation $quotation): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(Quotation $quotation): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(Quotation $quotation): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(Quotation $quotation): void
    {
        //
    }
}
