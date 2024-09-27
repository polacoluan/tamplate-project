<?php

namespace App\Containers\UniSection\PaymentMethod\Listeners;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodsListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMethodsListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentMethodsListedEvent $event): void
    {
    }
}
