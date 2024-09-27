<?php

namespace App\Containers\UniSection\PaymentMethod\Listeners;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodCreatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMethodCreatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentMethodCreatedEvent $event): void
    {
    }
}
