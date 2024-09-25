<?php

namespace App\Containers\UniSection\Payment\Listeners;

use App\Containers\UniSection\Payment\Events\PaymentUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentUpdatedEvent $event): void
    {
    }
}
