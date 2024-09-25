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
class FindStudentByIdTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/student/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testFindStudent(): void
    {
        $student = StudentFactory::new()->createOne();

        $response = $this->injectId($student->id)->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $this->encode($student->id))
                    ->etc()
        );
    }

    public function testFindNonExistingStudent(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    public function testFindFilteredStudentResponse(): void
    {
        $student = StudentFactory::new()->createOne();

        $response = $this->injectId($student->id)->endpoint($this->endpoint . '?filter=id')->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $student->getHashedKey())
                    ->missing('data.object')
        );
    }

    // TODO TEST
    // if your model have relationships which can be included into the response then
    // uncomment this test
    // modify it to your needs
    // test the relation
    // public function testFindStudentWithRelation(): void
    // {
    //     $student = StudentFactory::new()->createOne();
    //     $relation = 'roles';
    //
    //     $response = $this->injectId($student->id)->endpoint($this->endpoint . "?include=$relation")->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //           $json->has('data')
    //               ->where('data.id', $student->getHashedKey())
    //               ->count("data.$relation.data", 1)
    //               ->where("data.$relation.data.0.name", 'something')
    //               ->etc()
    //     );
    // }
}
