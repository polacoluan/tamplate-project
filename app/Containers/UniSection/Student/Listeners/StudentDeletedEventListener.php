<?php

namespace App\Containers\UniSection\Student\Listeners;

use App\Containers\UniSection\Student\Events\StudentDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(StudentDeletedEvent $event): void
    {
    }
}
