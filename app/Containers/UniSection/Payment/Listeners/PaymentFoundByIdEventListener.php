<?php

namespace App\Containers\UniSection\Payment\Listeners;

use App\Containers\UniSection\Payment\Events\PaymentFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentFoundByIdEvent $event): void
    {
    }
}
