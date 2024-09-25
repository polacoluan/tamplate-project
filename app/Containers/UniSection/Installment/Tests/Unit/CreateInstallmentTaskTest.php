<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Events\InstallmentCreatedEvent;
use App\Containers\UniSection\Installment\Tasks\CreateInstallmentTask;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use App\Ship\Exceptions\CreateResourceFailedException;
use Illuminate\Support\Facades\Event;

/**
 * @group installment
 * @group unit
 */
class CreateInstallmentTaskTest extends UnitTestCase
{
    public function testCreateInstallment(): void
    {
        Event::fake();
        $data = [];

        $installment = app(CreateInstallmentTask::class)->run($data);

        $this->assertModelExists($installment);
        Event::assertDispatched(InstallmentCreatedEvent::class);
    }

    // TODO TEST
    // public function testCreateInstallmentWithInvalidData(): void
    // {
    //     $this->expectException(CreateResourceFailedException::class);
    //
    //     $data = [
    //         // put some invalid data here
    //         // 'invalid' => 'data',
    //     ];
    //
    //     app(CreateInstallmentTask::class)->run($data);
    // }
}
