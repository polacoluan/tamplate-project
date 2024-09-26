<?php

namespace App\Containers\UniSection\PaymentWay\Listeners;

use App\Containers\UniSection\PaymentWay\Events\PaymentWaysListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentWaysListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentWaysListedEvent $event): void
    {
    }
}
