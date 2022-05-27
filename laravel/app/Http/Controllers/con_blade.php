<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class con_blade extends Controller
{
    //
    function loadview()
    {
        
        return view('blade1',['name'=>['s','u','s']]);
        
    }
    function loadview2()
    {
        $data=["shraddha","shreya"];
        
        return view("blade2",['user'=>$data]);
    }
}
