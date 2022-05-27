<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbmodel12mutator extends Model
{
    use HasFactory;
    public $table="info";
    public $timestamps=false;

    
    public function setNameAttribute($val)
    {
        if (substr($val,0,2)=="Mr")
        {
            $this->attributes['name']=$val;
        }
        else
        {
            $this->attributes['name']="Mr".$val;
        }
       // $this->attributes['name']=$val."Kulkarni";
    }
}
