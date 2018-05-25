<?php

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

Route::get('/welcome', 'HomeController@index')->name('welcome');

route::get('/deseos','DeseoController@index')->middleware('auth');
route::get('/deseos/create','DeseoController@create')->middleware('auth');
route::post('/deseos','DeseoController@store')->middleware('auth');

