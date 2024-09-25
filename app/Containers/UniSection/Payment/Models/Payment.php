<?php

namespace App\Containers\UniSection\Payment\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Payment extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Payment';
}
