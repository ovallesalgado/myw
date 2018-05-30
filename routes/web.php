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
Route::get('acercade', function () {
    return view('deseos.acercade');
});
Auth::routes();
/*
Route::get('/welcome', 'HomeController@index')->name('welcome');
*/
route::get('/deseos','DeseoController@index')->middleware('auth')->name('deseos');
route::get('/deseos/create','DeseoController@create')->middleware('auth')->name('crear');
route::post('/deseos','DeseoController@store')->middleware('auth');
route::get('/deseos/{id}/edit','DeseoController@edit')->middleware('auth');
route::post('/deseos/{id}/edit','DeseoController@update')->middleware('auth');
route::get('/deseos/{id}/delete','DeseoController@destroy')->middleware('auth');

route::get('/deseos/{id}/cuota','DeseoController@cuota')->middleware('auth');
route::post('/deseos/{id}/cuota','DeseoController@ahorro')->middleware('auth');


<<<<<<< HEAD

route::get('/deseos/ayuda','DeseoController@ayuda')->middleware('auth')->name('ayuda');

=======

route::get('/deseos/ayuda','DeseoController@ayuda')->middleware('auth');
route::post('/deseos/ahorro','DeseoController@ahorro')->middleware('auth');
>>>>>>> 13f4d5cc5f85d6e48607bae2c84c1e61b37510ed

route::post('/deseos/ahorro','DeseoController@ahorro')->middleware('auth');

Route::get('logout','Auth\LoginController@logout')->name('logout'); //ruta del logout

