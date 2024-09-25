<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Tests\UnitTestCase;
use Illuminate\Support\Facades\Schema;

/**
 * @group student
 * @group unit
 */
class StudentsMigrationTest extends UnitTestCase
{
    public function test_students_table_has_expected_columns(): void
    {
        $columns = [
            'id',
            // add your migration columns
            'created_at',
            'updated_at',
        ];

        foreach ($columns as $column) {
            $this->assertTrue(Schema::hasColumn('students', $column));
        }
    }
}
