<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbapi2savemodel;

class dbapi2savedata extends Controller
{
    //
    function index(Request $req)
    {
        // return "hello from stub";
        $data=new dbapi2savemodel();
        $data->id=$req->id;
        $data->name=$req->name;
        $result= $data->save();
        if($result)
        {
            return ["result"=>"data has been saved"];
        }
        else
        {
            return ["result"=>"data has not been saved"];
        }
    }
    function update(Request $req)
    {
        $data=dbapi2savemodel::find($req->id);
        $data->name=$req->name;
        $res=$data->save();
        if($res)
        {
            return ["data has been updated"];
        }
        else
        {
            return ["data has not been updated"];
        }
    }
}
