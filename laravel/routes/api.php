<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api1;
use App\Http\Controllers\dbapi1fetch;
use App\Http\Controllers\dbapi2savedata;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Simple API
Route::get("api1",[api1::class,'index']);

//Fetch data from table
Route::get("dbapi1",[dbapi1fetch::class,'index']);

//Save and update data in database using post method
Route::post("dbapi2save",[dbapi2savedata::class,'index']);
Route::post("dbapi2update",[dbapi2savedata::class,'update']);