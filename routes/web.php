<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;

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
    return view('index');
});

Route::get('ppAnswer','App\Http\Controllers\TestingController@pp');

//Route::get('testing', 'App\Http\Controllers\TestingController@index');
Route::get('jeevitha', 'App\Http\Controllers\JtestController@index');
Route::get('firas', [TestingController::class, 'firas']);
Route::get('yj', 'App\Http\Controllers\TestingController@yj');

