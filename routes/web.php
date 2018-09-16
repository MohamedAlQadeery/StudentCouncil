<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Route::get('/', function () {
    return view('test');
});



Route::group(['prefix'=>'user'],function (){
    Route::get('/',['as'=>'user.index','uses'=>'UserController@index']);
    Route::get('edit',['as'=>'user.edit','uses'=>'UserController@edit']);

});

Route::group(['prefix'=>'department'],function(){
    Route::get('/',['as'=>'department.index','uses'=>'DepartmentController@index']);
    Route::get('create',['as'=>'department.create','uses'=>'DepartmentController@create']);
});
Route::get('lang/{lang?}', ['as' => 'language.change', 'uses' => 'LanguageController@change']);