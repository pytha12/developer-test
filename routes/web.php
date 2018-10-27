<?php

use App\User;

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

//Route::get('/', function () {
    //$users = User::all();
    //return view('users', ['users'=>$users]);
    //return view('users');
//});
Route::get('/', 'UserController@index');

Route::resource('usernote', 'UserController');

