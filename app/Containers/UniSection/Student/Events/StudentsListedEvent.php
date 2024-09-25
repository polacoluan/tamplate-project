<?php

namespace App\Containers\UniSection\Student\Events;

use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Parents\Events\Event as ParentEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;

class StudentsListedEvent extends ParentEvent
{
    public function __construct(
        public readonly mixed $student,
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
