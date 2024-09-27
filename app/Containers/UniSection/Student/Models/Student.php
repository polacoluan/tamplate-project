<?php

namespace App\Containers\UniSection\Student\Models;

use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected $connection = "pgsql";

    protected $table = "students";
    
    protected string $resourceKey = 'Student';

    protected $fillable = [
        "name",
        "email",
        "cellphone",
        "birth_date",
        "cpf"
    ] ;

    protected $hidden = [] ;

    protected $primaryKey = "id";

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
