<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodDeletedEvent;
use App\Containers\UniSection\PaymentMethod\Tasks\DeletePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentmethod
 * @group unit
 */
class DeletePaymentMethodTaskTest extends UnitTestCase
{
    public function testDeletePaymentMethod(): void
    {
        Event::fake();
        $paymentMethod = PaymentMethodFactory::new()->createOne();

        $result = app(DeletePaymentMethodTask::class)->run($paymentMethod->id);

        $this->assertEquals(1, $result);
        Event::assertDispatched(PaymentMethodDeletedEvent::class);
    }

    public function testDeletePaymentMethodWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(DeletePaymentMethodTask::class)->run($noneExistingId);
    }
}
