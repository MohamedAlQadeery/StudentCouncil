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
Route::get('lang/{lang?}', ['as' => 'language.change', 'uses' => 'LanguageController@change']);


/**
 * admins route
 *
 */

Route::group(['prefix' => 'admins',], function () {
    Route::get('index', ['uses' => 'AdminsController@index', 'as' => 'admins.index']);
    Route::get('create', ['uses' => 'AdminsController@create', 'as' => 'admins.create']);
    Route::post('create', ['uses' => 'AdminsController@store', 'as' => 'admins.store']);
    Route::get('destroy/{id?}', ['uses' => 'AdminsController@destroy', 'as' => 'admins.destroy']);
    Route::get('edit/{id}', ['uses' => 'AdminsController@edit', 'as' => 'admins.edit']);
    Route::put('edit/{id}', ['uses' => 'AdminsController@update', 'as' => 'admins.update']);
//    Route::get('profile/{id}', ['uses' => 'AdminsController@profile', 'as' => 'admins.profile']);

    //edit page
    //script delete
});


/**
 *
 * south routes
 *
 */
Route::group(['prefix' => 'south',], function () {
    Route::get('index', ['uses' => 'SouthController@index', 'as' => 'south.index']);
    Route::get('create', ['uses' => 'SouthController@create', 'as' => 'south.create']);
    Route::post('create/{id?}', ['uses' => 'SouthController@store', 'as' => 'south.store']);
    Route::get('destroy/{id?}', ['uses' => 'SouthController@destroy', 'as' => 'south.destroy']);

});