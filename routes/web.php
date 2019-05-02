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
	if(Auth::check()){
		return view('backend.dashboard');	
	}else{
		return view('frontend.welcome');	
	}

});



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/form', 'HomeController@form')->name('form');



Route::group(['middleware' => ['auth']], function() {
	Route::resource('roles','RoleController');
	Route::resource('users','UserController');
	Route::resource('products','ProductController');
});
