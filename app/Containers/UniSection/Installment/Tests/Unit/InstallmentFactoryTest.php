<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;

/**
 * @group installment
 * @group unit
 */
class InstallmentFactoryTest extends UnitTestCase
{
    public function testCreateInstallment(): void
    {
        $installment = InstallmentFactory::new()->make();

        $this->assertInstanceOf(Installment::class, $installment);
    }
}
