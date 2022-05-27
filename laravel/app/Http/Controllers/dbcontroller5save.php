<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel3save;

class dbcontroller5save extends Controller
{
    //
    function show(Request $req)
    {
        $member= new dbmodel3save;
        $member->id=$req->id;
        $member->name=$req->name;
        $member->save();
        return view('condb4savedata');
    }

}
