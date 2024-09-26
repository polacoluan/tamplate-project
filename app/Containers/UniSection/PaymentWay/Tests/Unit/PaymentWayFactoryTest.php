<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;

/**
 * @group paymentway
 * @group unit
 */
class PaymentWayFactoryTest extends UnitTestCase
{
    public function testCreatePaymentWay(): void
    {
        $paymentWay = PaymentWayFactory::new()->make();

        $this->assertInstanceOf(PaymentWay::class, $paymentWay);
    }
}
