<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('finalize','HomeController@finalize')->name('finalize')->middleware('auth');

Route::get('newpost','HomeController@newpost')->name('newpost')->middleware('auth');
Route::POST('savepost','HomeController@savepost')->name('savepost')->middleware('auth');

Route::get('readpost/{id}','HomeController@readpost')->name('readpost')->middleware('auth');
Route::POST('saveprofile','HomeController@saveprofile')->name('saveprofile')->middleware('auth');

Route::get('messages', 'ChatsController@fetchMessages')->middleware('auth');
Route::post('messages', 'ChatsController@sendMessage')->middleware('auth');
