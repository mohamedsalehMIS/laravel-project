<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('testuser', function () {
    return view('index');
}); */

Route::get('creatStudent/{title}/{cat}/{age}', 'App\Http\Controllers\studentController@creatStudent');

Route::get('display', 'App\Http\Controllers\studentController@display');

Route::get('request', 'App\Http\Controllers\studentController@request');
/////////////////////////////////

// Task form Registeration

Route::get('registeration', 'App\Http\Controllers\registerController@createUser');
Route::post('storeRegister', 'App\Http\Controllers\registerController@store');
