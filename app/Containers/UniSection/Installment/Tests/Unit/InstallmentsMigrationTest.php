<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group installment
 * @group unit
 */
class InstallmentsMigrationTest extends UnitTestCase
{
    public function test_installments_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            // add your migration columns
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('installments', $column));
        }
    }
}
