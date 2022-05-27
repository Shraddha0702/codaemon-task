<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbconcontroller extends Controller
{
    //
    function dbcon()
    {
        return DB::select("select * from info");
    }
}
