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
Auth::routes();

Route::get('admin_login','AdminAuth\LoginController@showLoginForm');               
 Route::post('admin_login','AdminAuth\LoginController@login');                        
 Route::post('admin_logout ','AdminAuth\LoginController@logout');                      
 Route::post('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');  
 Route::get('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm'); 
 Route::post('admin_password/reset','AdminAuth\ResetPasswordController@reset');               
 Route::get('admin_password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm');        
  
Route::get('/home', 'HomeController@index');
Route::get('/admin_home', 'AdminHomeController@index');
Route::get('/penjual/{iklan}',['uses'=>'HomeController@show','as'=>'penjual.show']
);
Route::resource('pembeli','pembeliController');
Route::resource('penjualiklan','PenjualController');
Route::resource('home','HomeController');