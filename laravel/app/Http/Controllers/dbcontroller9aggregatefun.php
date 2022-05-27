<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontroller9aggregatefun extends Controller
{
    //
    function operation()
    {
       return DB::table('info')->min('id');
        // return DB::table('info')->min('name');
       // return DB::table('info')->count();


       //To display both min and max in one return statement
    //    $min=DB::table('info')->min('id');
    //    $max=DB::table('info')->max('id');
    //    return "min=".$min."max=".$max;
    }

}
