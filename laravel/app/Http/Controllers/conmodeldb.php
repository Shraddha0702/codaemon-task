<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modeltb;

class conmodeldb extends Controller
{
    //
    function dbmodel()
    {
        return Modeltb::all();
    }
}
