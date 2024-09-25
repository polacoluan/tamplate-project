<?php

namespace App\Containers\UniSection\Student\Models;

use App\Ship\Parents\Models\Model as ParentModel;

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
}
