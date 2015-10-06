<?php

namespace App\Listeners;

use App\Events\StreamEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StreamEventListener
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StreamEvent  $event
     * @return void
     */
    public function handle(StreamEvent $event)
    {
        //
    }
}
