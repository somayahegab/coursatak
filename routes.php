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

Route::get('/', function () {
	$courses=App\Course::all();
	
	return view('layouts.home',compact('courses'));

});


Route::get('courseregister', ['middleware'=>['auth'],function () {

		$courses=App\Course::all();

	
	
	return view('layouts.courseregister',compact('courses'));

}]);
Route::get('login', function () {
	
	
	return view('auth.login');

});
Route::get('register', function () {
	
	
	return view('auth.register');

});
Route::post('login', 'usercontroller@register');
