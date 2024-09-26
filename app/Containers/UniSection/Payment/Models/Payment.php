<?php

namespace App\Containers\UniSection\Payment\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Payment extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected $connection = "pgsql";

    protected $table = "payments";
    
    protected string $resourceKey = 'Payment';

    protected $fillable = [
        "student_id",
        "amount",
        "payment_way_id"
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";
}
