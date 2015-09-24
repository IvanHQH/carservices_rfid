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

/*
|------------------------------------------------------------------------
| Routes Login
|------------------------------------------------------------------------
*/

Route::get('/', function(){
    return View::make('login.login');
});

Route::get('/login', function(){
    return View::make('login.login');
});

Route::post('post_login','MethodsConstantsController@login');

Route::get('operators_list','OperatorController@operators_list');
Route::post('operator/{operatorId?}','OperatorController@store');
Route::get('operator/{operatorId?}','OperatorController@get');
Route::delete('operator/{operatorId?}','OperatorController@delete');

Route::get('cars_workshop','CarController@cars_workshop_list');

Route::get('records/{params?}','ServiceOrderController@records_list');

Route::get('towns_list','MethodsConstantsController@towns_list');
Route::get('states_list','MethodsConstantsController@states_list');

Route::get('test',function(){
    echo State::where('state','Hidalgo')->first()->id;
});

//State::where('state',$input['town'])->first()->id;


