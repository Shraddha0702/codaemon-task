<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    //
    public function index($user)
    {
        // echo "hello $user from controller";
        return ['name'=>"shraddha",'age'=>'22'];
    }
}
