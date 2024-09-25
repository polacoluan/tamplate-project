<?php

namespace App\Containers\UniSection\Student\Listeners;

use App\Containers\UniSection\Student\Events\StudentCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(StudentCreatedEvent $event): void
    {
    }
}
