<?php

namespace App\Containers\UniSection\Installment\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Installment extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected $connection = "pgsql";

    protected $table = "installments";
    
    protected string $resourceKey = 'Installment';

    protected $fillable = [
        "payment_id",
        "installment",
        "amount",
        "payment_date"
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";
}
