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

Route::get('register','PagesController@register');
Route::post('display','PagesController@store');
Route::get('display','PagesController@display');
Route::get('login','UserController@getLogin');
Route::post('login_display','UserController@postLogin');


