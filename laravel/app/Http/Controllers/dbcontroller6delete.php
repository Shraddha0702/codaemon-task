<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel4delete;

class dbcontroller6delete extends Controller
{
    //
    function show()
    {
        $data=dbmodel4delete::all();
        return view('condb6delete',['member'=>$data]);
    }
    function delete($id)
    {
        $data=dbmodel4delete::find($id);
        $data->delete();
        return redirect('deldata');
    }
}
