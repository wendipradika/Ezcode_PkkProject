<?php

use Illuminate\Auth\Events\Login;
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
    return view('user.index');
});

Auth::routes();

Route::get('/home', 'homeController@index')->name('home');
Route::get('/user', 'userController@index');
Route::get('/user/berita', 'userController@berita')->name('berita');
Route::get('/user/ajukan-pertanyaan', 'userController@ajukanPertanyaan')->name('ajukan-pertanyaan')->middleware('auth');



Route::get('/admin', 'adminController@index');
