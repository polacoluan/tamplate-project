<?php

namespace App\Containers\UniSection\Student\UI\API\Tests\Functional;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group student
 * @group api
 */
class UpdateStudentTest extends ApiTestCase
{
    protected string $endpoint = 'patch@v1/student/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    // TODO TEST
    public function testUpdateExistingStudent(): void
    {
        $student = StudentFactory::new()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->injectId($student->id)->makeCall($data);

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.object', 'Student')
                    ->where('data.id', $student->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }

    public function testUpdateNonExistingStudent(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // public function testUpdateExistingStudentWithEmptyValues(): void
    // {
    //     $student = StudentFactory::new()->createOne();
    //     $data = [
    //         // add some fillable fields here
    //         // 'first_field' => '',
    //         // 'second_field' => '',
    //     ];
    //
    //     $response = $this->injectId($student->id)->makeCall($data);
    //
    //     $response->assertStatus(422);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //         $json->has('errors')
    //             // ->where('errors.first_field.0', 'assert validation errors')
    //             // ->where('errors.second_field.0', 'assert validation errors')
    //             ->etc()
    //     );
    // }
}
