<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\quizz_controller;

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

Route::get('/', function () {
    return view('welcome');
});


//coademon quizz
route::view('email','email');
route::post('/quizz',[quizz_controller::class,'quizz']);
route::get('/next/{question_id}',[quizz_controller::class,'quizz']);
route::get('/save',[quizz_controller::class,'save']);
route::post('/mail',[quizz_controller::class,'mail']);
// route::view('timer','timer');


// Route::get('/create-timer', [CountdownTimerController::class, 'create']);
// Route::post('/update-timer', [CountdownTimerController::class, 'update'])->name('timer.update');
// Route::get('/view-timer', [CountdownTimerController::class, 'view']);
route::get('/test_result',[quizz_controller::class,'result'])->name('test_result2');
route::view('/dummy','dummy');