<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel;

class dbconcontroller3 extends Controller
{
    //
    function dbcon()
    {
        $data=dbmodel::all();
        return view('condb3',['member'=>$data]);
    }
}
