<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel13onetoone;

class dbcontroller13onetoone extends Controller
{
    //
    function show()
    {
        return dbmodel13onetoone::find(2)->getCompany;
    }
}
