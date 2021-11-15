<?php

namespace App\Listeners;

use App\Events\SendEmails;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class QuoteWasRequested
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendEmails  $event
     * @return void
     */
    public function handle(SendEmails $event)
    {
        dd($event);
    }
}
