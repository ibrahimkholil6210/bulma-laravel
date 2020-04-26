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

Route::get('/', function(){
    return view('index');
});
Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');
Route::get('/register/application', 'UserController@index');
Route::get('/register/{user}', 'UserController@edit');
Route::put('/register/{user}', 'UserController@update');
Route::delete('/register/{user}', 'UserController@destroy');




