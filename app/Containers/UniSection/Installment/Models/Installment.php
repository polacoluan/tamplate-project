<?php

namespace App\Containers\UniSection\Installment\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Containers\UniSection\Payment\Models\Payment;
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
    ];

    protected $hidden = [];

    protected $primaryKey = "id";

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }

    public function getStudentNameAttribute()
    {
        return $this->payment ? $this->payment->student->name : null;
    }
}
