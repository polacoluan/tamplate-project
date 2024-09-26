<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group paymentway
 * @group unit
 */
class PaymentWaysMigrationTest extends UnitTestCase
{
    public function test_payment_ways_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            // add your migration columns
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('payment_ways', $column));
        }
    }
}
