<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rcondb1 extends Controller
{
    //
    function show(Request $req)
    {
     
        $req->validate([
            'name'=>'required | max:10',
            'password'=>'required | min:5'

        ]);
        return $req->input();
    }
}
