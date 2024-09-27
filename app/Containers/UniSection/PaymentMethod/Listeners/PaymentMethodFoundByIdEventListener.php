<?php

namespace App\Containers\UniSection\PaymentMethod\Listeners;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentMethodFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentMethodFoundByIdEvent $event): void
    {
    }
}
