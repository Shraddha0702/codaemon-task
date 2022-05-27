<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashsess1 extends Controller
{
    //
    function flash1(Request $req)
    {
        $data= $req->input('name');
        $req->session()->flash('name',$data);
        return redirect('flashsession1');
    }
}
