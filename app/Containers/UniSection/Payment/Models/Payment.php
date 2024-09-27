<?php

namespace App\Containers\UniSection\Payment\Models;

use App\Containers\UniSection\Installment\Models\Installment;
use App\Containers\UniSection\Student\Models\Student;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        "payment_method_id"
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
