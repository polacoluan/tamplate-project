<?php

namespace App\Containers\UniSection\Student\Listeners;

use App\Containers\UniSection\Student\Events\StudentUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(StudentUpdatedEvent $event): void
    {
    }
}
