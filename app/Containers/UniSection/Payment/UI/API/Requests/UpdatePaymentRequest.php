<?php

namespace App\Containers\UniSection\Payment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdatePaymentRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
        'student_id',
        'payment_method_id'
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [
            // 'id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
