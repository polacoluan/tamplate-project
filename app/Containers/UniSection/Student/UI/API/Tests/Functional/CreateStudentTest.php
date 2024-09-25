<?php

namespace App\Containers\UniSection\Student\UI\API\Tests\Functional;

use App\Containers\UniSection\Student\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group student
 * @group api
 */
class CreateStudentTest extends ApiTestCase
{
    protected string $endpoint = 'post@v1/student';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    // TODO TEST
    public function testCreateStudent(): void
    {
        $data = [
            // 'something' => 'value',
        ];

        $response = $this->makeCall($data);

        $response->assertStatus(201);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.object', 'Student')
                    // ->where('data.something', $data['something'])
                    ->etc()
        );
    }

    // TODO TEST
    // public function testCreateStudentWithInvalidFields(): void
    // {
    //     $data = [
    //         // add some invalid field data here
    //         // 'something' => 'invalid',
    //     ];
    //
    //     $response = $this->makeCall($data);
    //
    //     $response->assertStatus(422);
    //     // validate errors and their messages here
    //     // $response->assertJson(
    //     //     fn (AssertableJson $json) =>
    //     //        $json->has('message')
    //     //            ->has('errors')
    //     //            ->where('errors.something.0', 'Some validation error message.')
    //     // );
    // }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotCreateStudent(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //
    //     $response = $this->makeCall([]);
    //
    //     $response->assertStatus(403);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('message')
    //                 ->where('message', 'This action is unauthorized.')
    //                 ->etc()
    //     );
    // }
}
