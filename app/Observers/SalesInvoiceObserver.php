<?php

namespace App\Observers;

use App\Models\SalesInvoice;

class SalesInvoiceObserver
{
    /**
     * Handle the {{ model }} "created" event.
     */
    public function created(SalesInvoice $salesInvoice): void
    {
        //
    }

    /**
     * Handle the {{ model }} "updated" event.
     */
    public function updated(SalesInvoice $salesInvoice): void
    {
        //
    }

    /**
     * Handle the {{ model }} "deleted" event.
     */
    public function deleted(SalesInvoice $salesInvoice): void
    {
        //
    }

    /**
     * Handle the {{ model }} "restored" event.
     */
    public function restored(SalesInvoice $salesInvoice): void
    {
        //
    }

    /**
     * Handle the {{ model }} "force deleted" event.
     */
    public function forceDeleted(SalesInvoice $salesInvoice): void
    {
        //
    }
}
