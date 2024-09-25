<?php

namespace App\Containers\UniSection\Student\Listeners;

use App\Containers\UniSection\Student\Events\StudentsListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentsListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(StudentsListedEvent $event): void
    {
    }
}
