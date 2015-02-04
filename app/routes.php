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

Route::get('/',array('as'=>'home','uses'=>'LoginController@index'));

Route::post('login','LoginController@authenticate');

Route::get('user',array('as'=>'users','uses'=>'UsersController@index'));

Route::get('dashboard',array('as'=>'Dashboard','uses'=>'LoginController@store'));

Route::get('edit/{id}',array('as'=>'edit_user','uses'=>'UsersController@edit'));

//Route::get('destroy/{id}',array('as'=>'delete_user','uses'=>'UsersController@destroy'));

Route::post('update/{id}',array('as'=>'update_user','uses'=>'UsersController@update'));

Route::get('show/{id}',array('as'=>'view_usage','uses'=>'UsersController@show'));

Route::get('application',array('as'=>'application_page','uses'=>'ApplicationController@index'));

Route::get('addapplication',array('as'=>'insert_application','uses'=>'ApplicationController@create'));

Route::post('storeapplication',array('as'=>'store_application','uses'=>'ApplicationController@store'));

Route::get('getdescription/{url}',array('as'=>'appdescription','uses'=>'LoginController@show'));

Route::get('editapplication/{id}',array('as' => 'edit_application','uses' => 'ApplicationController@edit'));

Route::post('updateapplication/{id}',array('as'=>'update_application','uses'=>'ApplicationController@update'));

Route::get('deleteapplication/{id}',array('as'=>'delete_application','uses'=>'ApplicationController@destroy'));

Route::get('rechargelist',array('as'=>'recharge_list','uses'=>'ReportController@index'));
