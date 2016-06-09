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
    return view('welcome');
});

Route::get('create','UserinformationController@create');
Route::get('/','UserinformationController@show');
Route::get('viewdetail/{id}','UserinformationController@viewdetail');
Route::get('edit/{id}','UserinformationController@edit');
Route::get('delete/{id}','UserinformationController@delete');

Route::post('save','UserinformationController@save');
Route::post('updateuser/{id}','UserinformationController@updateuser');