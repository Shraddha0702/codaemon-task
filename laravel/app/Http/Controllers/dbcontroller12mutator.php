<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel12mutator;

class dbcontroller12mutator extends Controller
{
    //
    function show()
    {
        $member= new dbmodel12mutator();
        $member->id="013";
        $member->name="Mr.shraddha";
        $member->save();
    }
}
