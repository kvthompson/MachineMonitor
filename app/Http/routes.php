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

     Route::get('/oee/1', [
        'uses' => 'OeeController@getOee1',
        'as' => 'oee'
    ]);

    Route::get('/oee/2', [
    'uses' => 'OeeController@getOee2',
        'as' => 'oee'
    ]);
    
    Route::get('/oee/3', [
    'uses' => 'OeeController@getOee3',
        'as' => 'oee'
    ]);
    
    Route::get('/oee/4', [
    'uses' => 'OeeController@getOee4',
        'as' => 'oee'
    ]);

   Route::get('/faults', [
        'uses' => 'AttendFaultController@getFault',
        'as' => 'faults'
    ]);

    Route::get('/faultcount', [
        'uses' => 'AttendfaultController@getCount',
        'as' => 'faultcount'
    ]);

    Route::get('/delete-fault/{fault_id}', [
    	'uses' => 'AttendFaultController@getDeleteFault',
	'as' => 'fault.delete',
	'middleware' => 'auth'
    ]);

     Route::get('/faultlog', [
        'uses' => 'AttendFaultController@getFaultLog',
        'as' => 'faultlog'
    ]);

    Route::get('/machines', [
        'uses' => 'MachineController@getMachine',
        'as' => 'machines'
    ]);

    Route::post('/register',[
	'uses' => 'UserController@postRegister', 
	'as' => 'register'
    ]);

    Route::post('/login',[
        'uses' => 'UserController@postLogIn',
        'as' => 'login'
    ]);

    Route::get('/logout',[
        'uses' => 'UserController@getLogOut',
        'as' => 'logout'
    ]);

    Route::get('/dashboard', [
    	'uses' => 'UserController@getDashboard',
        'as' => 'dashboard',
	'middleware' => 'auth'
    ]);

    Route::get('/api/users', [
    	'uses' => 'UserController@userJson',
	'as' => 'users'
    ]);

    Route::get('/api/faults', [
        'uses' => 'FaultController@faultJson',
	'as' => 'apifaults'
    ]);

     Route::get('/api/machines', [
        'uses' => 'MachineController@machineJson',
        'as' => 'apimachines'
    ]);

     Route::get('/api/oees', [
        'uses' => 'OeeController@oeeJson',
        'as' => 'apioees'
    ]);

});

