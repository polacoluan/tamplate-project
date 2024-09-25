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
class ListStudentsTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/student';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testListStudentsByAdmin(): void
    {
        $this->getTestingUserWithoutAccess(createUserAsAdmin: true);
        StudentFactory::new()->count(2)->create();

        $response = $this->makeCall();

        $response->assertStatus(200);
        $responseContent = $this->getResponseContentObject();

        $this->assertCount(2, $responseContent->data);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testListStudentsByNonAdmin(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     StudentFactory::new()->count(2)->create();
    //
    //     $response = $this->makeCall();
    //
    //     $response->assertStatus(403);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('message')
    //                 ->where('message', 'This action is unauthorized.')
    //                 ->etc()
    //     );
    // }

    // TODO TEST
    // public function testSearchStudentsByFields(): void
    // {
    //     StudentFactory::new()->count(3)->create();
    //     // create a model with specific field values
    //     $student = StudentFactory::new()->create([
    //         // 'name' => 'something',
    //     ]);
    //
    //     // search by the above values
    //     $response = $this->endpoint($this->endpoint . "?search=name:" . urlencode($student->name))->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('data')
    //                 // ->where('data.0.name', $student->name)
    //                 ->etc()
    //     );
    // }

    public function testSearchStudentsByHashID(): void
    {
        $students = StudentFactory::new()->count(3)->create();
        $secondStudent = $students[1];

        $response = $this->endpoint($this->endpoint . '?search=id:' . $secondStudent->getHashedKey())->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                     ->where('data.0.id', $secondStudent->getHashedKey())
                    ->etc()
        );
    }
}
