<?php

namespace App\Containers\UniSection\Payment\Listeners;

use App\Containers\UniSection\Payment\Events\PaymentsListedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentsListedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(PaymentsListedEvent $event): void
    {
    }
}
