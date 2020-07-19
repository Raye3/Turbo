<?php

declare(strict_types=1);

namespace App\Observers;

use App\Invoice;
use App\Jobs\UpdateStockFromInvoice;

class InvoiceObserver
{
	/**
	 * Handle the invoice "creating" event.
	 *
	 * @return void
	 */
	public function creating(Invoice $invoice)
	{
		$invoice->user_id = auth()->id();
	}

	/**
	 * Handle the invoice "created" event.
	 *
	 * @return void
	 */
	public function created(Invoice $invoice)
	{
		dispatch(new UpdateStockFromInvoice($invoice->id, auth()->id()))->delay(now()->addSeconds(3));
	}

	/**
	 * Handle the invoice "updated" event.
	 *
	 * @return void
	 */
	public function updated(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "deleted" event.
	 *
	 * @return void
	 */
	public function deleted(Invoice $invoice)
	{
		// Delete pivot data
		$invoice->parts()->detach();
	}

	/**
	 * Handle the invoice "restored" event.
	 *
	 * @return void
	 */
	public function restored(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "force deleted" event.
	 *
	 * @return void
	 */
	public function forceDeleted(Invoice $invoice)
	{
		//
	}
}
