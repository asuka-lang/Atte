<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimestampsController;
use App\Http\Controllers\DateController;

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

Route::middleware('auth')->group(function(){
    Route::get('/',[AuthController::class,'index']);
    Route::post('/',[AuthController::class,'search']);
});
Route::post('/start',[TimestampsController::class,'start']);
Route::post('/end',[TimestampsController::class,'end']);
Route::post('/breakIn',[TimestampsController::class,'breakIn']);
Route::post('/breakOut',[TimestampsController::class,'breakOut']);
Route::get('/attendance',[DateController::class,'index']);
Route::get('/preview',[DateController::class,'preview']);
Route::get('/next',[DateController::class,'next']);