<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rcontroller2 extends Controller
{
    //
    function show($name)
    {
        return view("rview1",["user"=>$name]);
        
    }
    function show2()
    {
        return view("rview2",["name"=>["shraddha","shreya"]]);
    }
}
