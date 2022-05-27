<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel11accessor extends Model
{
    use HasFactory;
    public $table="info";

    public function getNameAttribute($val)
    {
        return ucfirst($val);
    }
    public function getIdAttribute($val)
    {
        return $val.',00';
    }
}
