<?php

namespace App\Containers\UniSection\Installment\UI\API\Tests\Functional;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Containers\UniSection\Installment\UI\API\Tests\ApiTestCase;

/**
 * @group installment
 * @group api
 */
class DeleteInstallmentTest extends ApiTestCase
{
    protected string $endpoint = 'delete@v1/installment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testDeleteExistingInstallment(): void
    {
        $installment = InstallmentFactory::new()->createOne();

        $response = $this->injectId($installment->id)->makeCall();

        $response->assertStatus(204);
    }

    public function testDeleteNonExistingInstallment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotDeleteInstallment(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     $installment = InstallmentFactory::new()->createOne();
    //
    //     $response = $this->injectId($installment->id)->makeCall();
    //
    //     $response->assertStatus(403);
    // }
}
