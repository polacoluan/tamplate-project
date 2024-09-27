<?php

namespace App\Containers\UniSection\PaymentMethod\Listeners;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodUpdatedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMethodUpdatedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentMethodUpdatedEvent $event): void
    {
    }
}
