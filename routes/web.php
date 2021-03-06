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
		$data = [
			'pageTitle' => 'Dashboard'
		];
		return view('backend.dashboard', $data);		
	}else{
		$data = [
			'pageTitle' => 'Dashboard'
		];
		return view('frontend.welcome', $data);	
	}

});



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/form', 'HomeController@form')->name('form');
Route::get('/table', 'HomeController@table')->name('table');



Route::group(['middleware' => ['auth']], function() {
	Route::resource('roles','RoleController');
	Route::resource('users','UserController');
	Route::resource('products','ProductController');
});
