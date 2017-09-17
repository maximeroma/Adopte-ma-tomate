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
    return view('acceuil');
});

Route::get('/cartographie', function () {
	if(Auth::check()) {
    	return view('fullMap');
	}
	return view('visiteurMap');
});

// Route::get('/getInfo', 'LieuController@getMapInfo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/brigade', 'BrigadeController@show');

Route::resource('lieux', 'LieuController');
