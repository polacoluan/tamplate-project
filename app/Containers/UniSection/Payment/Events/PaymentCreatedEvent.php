<?php

namespace App\Containers\UniSection\Payment\Events;

use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class PaymentCreatedEvent extends ParentEvent
{
    public function __construct(
        public readonly Payment $payment,
    ) {
    }

    /**
     * @return Channel[]
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
