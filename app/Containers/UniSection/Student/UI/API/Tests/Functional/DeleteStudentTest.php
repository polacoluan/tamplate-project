<?php

namespace App\Containers\UniSection\Student\UI\API\Tests\Functional;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\UI\API\Tests\ApiTestCase;

/**
 * @group student
 * @group api
 */
class DeleteStudentTest extends ApiTestCase
{
    protected string $endpoint = 'delete@v1/student/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testDeleteExistingStudent(): void
    {
        $student = StudentFactory::new()->createOne();

        $response = $this->injectId($student->id)->makeCall();

        $response->assertStatus(204);
    }

    public function testDeleteNonExistingStudent(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotDeleteStudent(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     $student = StudentFactory::new()->createOne();
    //
    //     $response = $this->injectId($student->id)->makeCall();
    //
    //     $response->assertStatus(403);
    // }
}
