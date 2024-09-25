<?php

namespace App\Containers\UniSection\Installment\Listeners;

use App\Containers\UniSection\Installment\Events\InstallmentDeletedEvent;
use App\Ship\Parents\Listeners\Listener as ParentListener;
use Illuminate\Contracts\Queue\ShouldQueue;

class InstallmentDeletedEventListener extends ParentListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(InstallmentDeletedEvent $event): void
    {
    }
}
