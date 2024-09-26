<?php

namespace App\Containers\UniSection\PaymentWay\Listeners;

use App\Containers\UniSection\PaymentWay\Events\PaymentWayFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentWayFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentWayFoundByIdEvent $event): void
    {
    }
}
