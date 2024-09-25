<?php

namespace App\Containers\UniSection\Installment\Listeners;

use App\Containers\UniSection\Installment\Events\InstallmentsListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallmentsListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(InstallmentsListedEvent $event): void
    {
    }
}
