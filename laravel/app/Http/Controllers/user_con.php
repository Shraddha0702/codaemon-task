<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_con extends Controller
{
    //
    function loadview($name)
    {
        return view("user",['name'=> $name]);
    }
}
