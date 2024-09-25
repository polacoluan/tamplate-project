<?php

namespace App\Containers\UniSection\Installment\Listeners;

use App\Containers\UniSection\Installment\Events\InstallmentUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallmentUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(InstallmentUpdatedEvent $event): void
    {
    }
}
