<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodFoundByIdEvent;
use App\Containers\UniSection\PaymentMethod\Tasks\FindPaymentMethodByIdTask;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentmethod
 * @group unit
 */
class FindPaymentMethodByIdTaskTest extends UnitTestCase
{
    public function testFindPaymentMethodById(): void
    {
        Event::fake();
        $paymentMethod = PaymentMethodFactory::new()->createOne();

        $foundPaymentMethod = app(FindPaymentMethodByIdTask::class)->run($paymentMethod->id);

        $this->assertEquals($paymentMethod->id, $foundPaymentMethod->id);
        Event::assertDispatched(PaymentMethodFoundByIdEvent::class);
    }

    public function testFindPaymentMethodWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindPaymentMethodByIdTask::class)->run($noneExistingId);
    }
}
