<?php

namespace App\Containers\UniSection\PaymentMethod\Events;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class PaymentMethodUpdatedEvent extends ParentEvent
{
    public function __construct(
        public readonly PaymentMethod $paymentmethod,
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
