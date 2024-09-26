<?php

namespace App\Containers\UniSection\PaymentWay\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class PaymentWay extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected $connection = "pgsql";

    protected $table = "payment_ways";
    
    protected string $resourceKey = 'PaymentWays';

    protected $fillable = [
        "way",
        "installments"
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";
}
