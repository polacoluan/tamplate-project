<?php

namespace App\Containers\UniSection\PaymentWay\Listeners;

use App\Containers\UniSection\PaymentWay\Events\PaymentWayDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentWayDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentWayDeletedEvent $event): void
    {
    }
}
