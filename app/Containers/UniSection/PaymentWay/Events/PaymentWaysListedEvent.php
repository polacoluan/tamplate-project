<?php

namespace App\Containers\UniSection\PaymentWay\Events;

use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class PaymentWaysListedEvent extends ParentEvent
{
    public function __construct(
        public readonly mixed $paymentway,
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
