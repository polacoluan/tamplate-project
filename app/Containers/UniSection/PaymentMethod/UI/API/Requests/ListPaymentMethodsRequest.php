<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class ListPaymentMethodsRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
