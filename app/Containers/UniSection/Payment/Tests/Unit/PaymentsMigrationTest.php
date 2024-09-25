<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group payment
 * @group unit
 */
class PaymentsMigrationTest extends UnitTestCase
{
    public function test_payments_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            // add your migration columns
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('payments', $column));
        }
    }
}
