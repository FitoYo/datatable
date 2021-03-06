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


//Route::get('/', 'UsersController@index')->name('index');



Route::get('/', function(){ 
    return view('index'); 
});

Route::get('/show/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::get('/delete/{id}', 'App\Http\Controllers\UserController@delete')->name('users.delete');