<?php

namespace App\Containers\UniSection\Installment\Listeners;

use App\Containers\UniSection\Installment\Events\InstallmentCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallmentCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(InstallmentCreatedEvent $event): void
    {
    }
}
