<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/p1', [
	'as' => 'asp1',
	'uses' => 'ControllerP1@functionp1'
]);

Route::get('/p1displayidloadcsv', [
	'as' => 'asp1displayidloadcsv',
	'uses' => 'ControllerP1@loadcsv'
]);

Route::get('/p1displayiddisplay', [
	'as' => 'asp1displayiddisplaycsv',
	'uses' => 'ControllerP1@displaycsv'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
