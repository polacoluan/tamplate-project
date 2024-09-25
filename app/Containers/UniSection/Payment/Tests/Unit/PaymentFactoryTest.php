<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;

/**
 * @group payment
 * @group unit
 */
class PaymentFactoryTest extends UnitTestCase
{
    public function testCreatePayment(): void
    {
        $payment = PaymentFactory::new()->make();

        $this->assertInstanceOf(Payment::class, $payment);
    }
}
