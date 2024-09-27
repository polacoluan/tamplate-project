<?php

namespace App\Containers\UniSection\PaymentMethod\Listeners;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMethodDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentMethodDeletedEvent $event): void
    {
    }
}
