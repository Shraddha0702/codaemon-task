<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesscon1 extends Controller
{
    //
    function session(Request $req)
    {
       $data=$req->input();
       $req->session()->put('name',$data['name']);
       return redirect('profile');
    }
}
