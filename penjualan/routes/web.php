<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('pembeli.index');
});*/
Route::get('/',['uses'=>'PembeliController@index','as'=>'pembeli']
);
Route::get('/pembeli/{iklan}',['uses'=>'PembeliController@show','as'=>'pembeli.show']
);
Route::get('/category/{category}',[
	'uses'=>'PembeliController@category','as'=>'category'
	]);
Route::get('/user/{user}',[
	'uses'=>'PembeliController@user','as'=>'user'
	]);
Route::get('pembeli/autocomplete',[
	'uses'=>'PembeliController@autocomplete','as'=>'pembeli.autocomplete'
	]);