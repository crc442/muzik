<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showHome'));

Route::get('/login', array('uses' => 'HomeController@showLogin'));

Route::get('/register', array('uses' => 'HomeController@showRegister'));

Route::get('/test', function()
{
	$users = DB::table('users')->get();
	return $users;
});
