<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel2pagi;

class dbconcontroller4pagination extends Controller
{
    //
    function show()
    {
        $data=dbmodel2pagi::paginate(3);
        return view('dbpagination',['member'=>$data]);
    }
}
