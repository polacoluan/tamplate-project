<?php

namespace App\Containers\UniSection\PaymentWay\Listeners;

use App\Containers\UniSection\PaymentWay\Events\PaymentWayUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentWayUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentWayUpdatedEvent $event): void
    {
    }
}
