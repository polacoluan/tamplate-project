<?php

namespace App\Containers\UniSection\Student\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class ListStudentsRequest extends ParentRequest
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
