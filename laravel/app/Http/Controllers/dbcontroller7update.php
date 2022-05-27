<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel5update;

class dbcontroller7update extends Controller
{
    //
    function show()
    {
        $data=dbmodel5update::all();
        return view('condb7update',['member'=>$data]);
    }
    function delete($id)
    {
        $data=dbmodel5update::find($id);
        $data->delete();
        return redirect('updata');
    }
    function up($id)
    {
        $data=dbmodel5update::find($id);
        return view('updatedata',['data'=>$data]);
        
    }
    function edit(Request $req)
    {
       
        $data=dbmodel5update::find($req->id);
        $data->name=$req->name;
        $data->save();
        return redirect('updata');

    }
       
}
