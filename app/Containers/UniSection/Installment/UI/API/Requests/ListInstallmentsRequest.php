<?php

namespace App\Containers\UniSection\Installment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class ListInstallmentsRequest extends ParentRequest
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
