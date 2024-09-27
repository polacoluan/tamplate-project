<?php

namespace App\Containers\UniSection\PaymentMethod\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Parents\Models\Model as ParentModel;

class PaymentMethod extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected $connection = "pgsql";

    protected $table = "payment_methods";
    
    protected string $resourceKey = 'PaymentMethods';

    protected $fillable = [
        'method',
        'installments'
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
