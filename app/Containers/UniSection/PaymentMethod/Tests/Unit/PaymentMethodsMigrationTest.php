<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group paymentmethod
 * @group unit
 */
class PaymentMethodsMigrationTest extends UnitTestCase
{
    public function test_payment_methods_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            // add your migration columns
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('payment_methods', $column));
        }
    }
}
