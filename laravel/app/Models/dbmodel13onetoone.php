<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel13onetoone extends Model
{
    use HasFactory;
    public $table="info";

    public function getCompany()
    {
        return $this->hasOne('App\Models\dbmodel13');
    }
}
