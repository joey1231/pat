<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


	Route::get('/admin/','Admin\DashboardController@index');	
Route::group(['middleware' => 'web'],function(){
	Route::group(['prefix'=>'admin'],function(){
		Route::get('/indeed','Admin\IndeedController@index');
		Route::get('/github','Admin\GithubController@index');
		Route::get('/dashboard','Admin\DashboardController@index');		
	});	
});