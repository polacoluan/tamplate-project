<?php

namespace App\Containers\UniSection\Student\Listeners;

use App\Containers\UniSection\Student\Events\StudentFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(StudentFoundByIdEvent $event): void
    {
    }
}
