<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routemodel;

class routemodelbinding extends Controller
{
    //
    function index(routemodel $key)
    {
        //return "hello from stub";
       
            return $key;
       

    }
}
