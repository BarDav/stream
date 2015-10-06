<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StreamEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $isStreaming;

    /**
     * Create a new event instance.
     * @param $isStreaming
     */
    public function __construct($isStreaming)
    {
        $this->isStreaming = $isStreaming;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test_channel'];
    }
}
