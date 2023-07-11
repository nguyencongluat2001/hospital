<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $phone;
    /**
     * Create a new event instance.
     */
    public function __construct($phone, $message)
    {
        $this->message = $message;
        $this->phone = $phone;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return [$this->phone];
    }
    public function broadcastAs()
    {
        return 'chat';
    }
}
