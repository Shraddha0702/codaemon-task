<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class con_html extends Controller
{
    //
    function getdata(Request $req)
    {
        $req->validate(['name'=>'required | max:10',
                        'password'=>'required | min:5']
    );
        
        return $req->input();
    }
}
