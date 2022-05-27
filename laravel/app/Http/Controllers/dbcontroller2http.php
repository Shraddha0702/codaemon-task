<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class dbcontroller2http extends Controller
{
    //
    function index()
    {
        $collection=Http::get("https://reqres.in/api/users?page=1");
        return view("condbhttp1",['collection'=>$collection['data']]);
    }
}
