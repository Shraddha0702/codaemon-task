<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class fluentstrcontroller extends Controller
{
    //
    function index()
    {
        //return "hello from stub";
         $str="hi,welcome to laravel";
        // $str=Str::ucfirst($str);
        // $str=Str::replaceFirst("Hi","Hello",$str);

        $str=Str::of($str)
        ->ucfirst($str)
        ->replaceFirst("Hi","Hello",$str)
        ->camel($str);
        return view('fluentString',['str'=>$str]);
    }
}
