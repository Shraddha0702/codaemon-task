<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel11accessor;

class dbcontroller11accessor extends Controller
{
    //
    function show()
    {
        return dbmodel11accessor::all();
    }
}
