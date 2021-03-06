<?php

namespace DNSCHumanResource\Events;

use DNSCHumanResource\Events\Event;
use DNSCHumanResource\Models\TravelOrder;
use Illuminate\Queue\SerializesModels;

class TravelOrderFiled extends Event
{
    use SerializesModels;

    public $travel;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(TravelOrder $travel)
    {
        $this->travel = $travel;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
