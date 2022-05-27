<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontroller10join extends Controller
{
    //
    function show()
    {
        return DB::table('info')
        ->join('info2','info.id',"=",'info2.id')
        ->where('info2.address','rp')
        ->get();
    }
}
