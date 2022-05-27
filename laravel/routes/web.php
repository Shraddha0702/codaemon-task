<?php

use App\Http\Controllers\con_blade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller1;
use App\Http\Controllers\user_con;
use App\Http\Controllers\con_html;
use App\Http\Controllers\conmodeldb;
use App\Http\Controllers\rcondb1;
use App\Http\Controllers\rcontroller1;
use App\Http\Controllers\rcontroller2;
use App\Http\Controllers\dbconcontroller;
use App\Http\Controllers\dbcontroller2http;
use App\Http\Controllers\dbconcontroller2;
use App\Http\Controllers\sesscon1;
use App\Http\Controllers\flashsess1;
use App\Http\Controllers\rsesscon1;
use App\Http\Controllers\upfilecon;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\dbconcontroller3;
use App\Http\Controllers\dbconcontroller4pagination;
use App\Http\Controllers\dbcontroller5save;
use App\Http\Controllers\dbcontroller6delete;
use App\Http\Controllers\dbcontroller7update;
use App\Http\Controllers\dbcontroller8querybuilder;
use App\Http\Controllers\dbcontroller9aggregatefun;
use App\Http\Controllers\dbcontroller10join;
use App\Http\Controllers\dbcontroller11accessor;
use App\Http\Controllers\dbcontroller12mutator;
use App\Http\Controllers\dbcontroller13onetoone;
use App\Http\Controllers\fluentstrcontroller;
use App\Http\Controllers\routemodelbinding;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    
//     return view('hello');
//     // return redirect('about');
// });

// route::get('/about',function(){
//     return view('about');
// });

route::view('about','about');
route::view('xyz','contact');
// route::view('/','hello');

Route::get('/hello1/{name}', function ($name) {
    
    return view('hello1',['user'=>$name]);
});
route::get("controller1/{user}",[controller1::class,'index']);

Route::get("/user/{name}",[user_con::class,'loadview']);
Route::view("display","display1");
Route::view("show","display2")->middleware('age');
route::get("blade",[con_blade::class,'loadview']);
route::get("blade2",[con_blade::class,'loadview2']);
route::post("form1",[con_html::class,"getdata"]);
route::view("login","htmlform1");

route::view("home","middlewarehome");
route::view("middlewarenoaccess","middlewarenoaccess");
Route::group(['middleware'=>["agecheck"]],function()
{
    route::view("about","about");
    Route::view("display","display1");
});

route::get("rcon1/{name}",[rcontroller1::class,'conhello']);
route::get("rview/{name}",function($name)
{
    return view("rview1",["user"=>$name]);
});

route::get("rcon2/{name}",[rcontroller2::class,'show']);
route::view("rcomponent","rheader");

route::get("rview2",[rcontroller2::class,"show2"]);

route::post("rcondatabase",[rcondb1::class,'show']);
route::view("login2","rcondatabase");

//display data from database table info;
Route::get("dbcon1",[dbconcontroller::class,'dbcon']);
//display data from database table info using model;
Route::get("dbmodel1",[conmodeldb::class,'dbmodel']);
//display data in tablular format
Route::get("dbcon2",[dbcontroller2http::class,'index']);

//get post and put methods
Route::put("condb2url",[dbconcontroller2::class,'show']);
route::view("condb",'condb2');

//session see file sess1
Route::post("session1",[sesscon1::class,'session']);
// route::view("sess1","sess1");
route::get("/sess1",function()
{
    if(session()->has('name'))
    {
        return view('profile');
    }
    return view('sess1');
});
route::view("profile","profile");
route::get("/logout",function()
{
    if(session()->has('name'))
    {
        session()->pull('name');
    }
    return view('sess1');

});

//flash session
route::post("flash1",[flashsess1::class,'flash1']);
route::view("flashsession1","flashsession1");

//revision of session
Route::post("rsess",[rsesscon1::class,'index']);
route::get("/rsess1",function()
{
    if(session()->has('name'))
    {
        return view('rprofile');
    }
    return view('rsess1');
});
route::view("rprofile","rprofile");
route::get("/rlogout",function()
{
    if(session()->has('name'))
    {
        session()->pull('name');
        
    }
    return view('rsess1');
});

//upload file
Route::post("uploadfile",[upfilecon::class,'upfile1']);
route::view("upfile","upfile");

//localization
route::get("/locallization/{lang}",function($lang)
{
App::setLocale($lang);
return view('locallization');
});
// route::view("locallization","locallization");

//retrive data from database
Route::get('condb3ch',[dbconcontroller3::class,'dbcon']);

//retrive data from database and apply pagination
Route::get('pagi',[dbconcontroller4pagination::class,'show']);

//save data in database
route::view('condb4','condb4savedata');
Route::post('condb4',[dbcontroller5save::class,'show']);

//delete data from database
Route::get("deldata",[dbcontroller6delete::class,'show']);
//  route::view('deldata','condb6delete');
Route::get("delete/{id}",[dbcontroller6delete::class,'delete']);

//update data from database
Route::get('updata',[dbcontroller7update::class,'show']);
Route::get('delete1/{id}',[dbcontroller7update::class,'delete']);
Route::get('update/{id}',[dbcontroller7update::class,'up']);
Route::post('edit',[dbcontroller7update::class,'edit']);

// database Query builder 
Route::get('quebui',[dbcontroller8querybuilder::class,'show']);

//aggregate functions
Route::get('aggregatefun',[dbcontroller9aggregatefun::class,'operation']);

//Joins
Route::get('join',[dbcontroller10join::class,'show']);

//Accessor
Route::get('accessor',[dbcontroller11accessor::class,'show']);

//Mutator
Route::get('mutator',[dbcontroller12mutator::class,'show']);

//one to one relation
Route::get('onetoone',[dbcontroller13onetoone::class,'show']);

//fluent string
// route::view('fluentstr','fluentString');
Route::get('fluentstr',[fluentstrcontroller::class,'index']);

//route model binding
Route::get('routemodel/{key:name}',[routemodelbinding::class,'index']);