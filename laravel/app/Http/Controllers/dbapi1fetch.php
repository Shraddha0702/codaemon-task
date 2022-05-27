<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbapi1model;

class dbapi1fetch extends Controller
{
    //
    function index()
    {
        // return "hello from stub";
        return dbapi1model::all();
    }
}
