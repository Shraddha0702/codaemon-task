<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbconcontroller2 extends Controller
{
    //
    function show(Request $req)
    {
        
        return $req->input();
    }
}
