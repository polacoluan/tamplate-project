<?php

namespace App\Containers\UniSection\Payment\Listeners;

use App\Containers\UniSection\Payment\Events\PaymentCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentCreatedEvent $event): void
    {
    }
}
