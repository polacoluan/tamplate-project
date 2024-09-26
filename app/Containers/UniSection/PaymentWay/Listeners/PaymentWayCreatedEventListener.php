<?php

namespace App\Containers\UniSection\PaymentWay\Listeners;

use App\Containers\UniSection\PaymentWay\Events\PaymentWayCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentWayCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentWayCreatedEvent $event): void
    {
    }
}
