<?php

namespace App\Containers\UniSection\Installment\Listeners;

use App\Containers\UniSection\Installment\Events\InstallmentFoundByIdEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallmentFoundByIdEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(InstallmentFoundByIdEvent $event): void
    {
    }
}
