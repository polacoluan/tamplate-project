<?php

namespace App\Containers\UniSection\Payment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class ListPaymentsRequest extends ParentRequest
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
