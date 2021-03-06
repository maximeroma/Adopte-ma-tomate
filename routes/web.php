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

Route::get('/form', function () {
	return view('form');
});


Route::get('/cartographie', function () {
	if(Auth::check()) {
    	return view('fullMap');
	}else {
		return view('visiteurMap');
	}
	

});
Route::get('info' , function(){
	return view('infoJardin');
});
// Route::get('/getInfo', 'LieuController@getMapInfo');


Route::get('/test', function () {
	return view('fullMap');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/brigade', function(){
    return view('brigade');
});

Route::get('/inbox', function ()  {
return view('inbox');
})->name('mesMessages');

// Route::ressource('lieux', 'LieuController');
Route::resource('lieux', 'LieuController');

