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

Route::get('/', 'login@index');

Route::get('validate', 'login@user');

Route::get('user', 'user@index');

Route::get('user/search', 'user@search');

Route::get('admin', 'admin@index');

Route::get('admin/add', 'admin@add');
