<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rsesscon1 extends Controller
{
    //
    function index(Request $req)
    {
        $data=$req->input();
        $req->session()->put('name',$data['name']);
        return redirect('rprofile');
    }
}
