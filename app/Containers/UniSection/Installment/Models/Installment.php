<?php

namespace App\Containers\UniSection\Installment\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Installment extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Installment';
}
