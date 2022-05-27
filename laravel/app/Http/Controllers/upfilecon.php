<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upfilecon extends Controller
{
    //
    function upfile1(Request $req)
    {
      return $req->file('file1')->store('docs');
      
    }
}
