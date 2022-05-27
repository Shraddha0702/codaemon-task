<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rcontroller1 extends Controller
{
    //
    function conhello($name)
    {
        echo " hello ";
        echo "$name";
        return ["name"=>"s","age"=>22];
        
    }
    
}
