<?php

namespace App\Containers\UniSection\Installment\Events;

use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class InstallmentUpdatedEvent extends ParentEvent
{
    public function __construct(
        public readonly Installment $installment,
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
