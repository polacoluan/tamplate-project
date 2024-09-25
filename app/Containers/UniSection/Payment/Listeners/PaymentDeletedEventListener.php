<?php

namespace App\Containers\UniSection\Payment\Listeners;

use App\Containers\UniSection\Payment\Events\PaymentDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentDeletedEvent $event): void
    {
    }
}
