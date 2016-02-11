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
    Route::get('/', function () {
    	return view('welcome');
    })->name('/');
        
    Route::get('/oee', [
        'uses' => 'OeeController@getOee',
	'as' => 'oee'
    ]); 

   Route::get('/faults', [
        'uses' => 'FaultController@getFault',
        'as' => 'faults'
    ]);

    Route::get('machines', function() {
        return view('machines');
    });

    Route::post('/register',[
	'uses' => 'UserController@postRegister', 
	'as' => 'register'
    ]);

    Route::post('/login',[
        'uses' => 'UserController@postLogIn',
        'as' => 'login'
    ]);

    Route::get('/dashboard', [
    	'uses' => 'UserController@getDashboard',
        'as' => 'dashboard',
	'middleware' => 'auth'
    ]);

});
