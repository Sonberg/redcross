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

Route::group(['prefix' => LaravelLocalization::setLocale()], function() { 
    
    // Index
    Route::get('/', 'IndexController@getIndex');

    // Immigrant Form
    Route::get('/immigrant', 'ImmigrantController@getIndex');
    Route::post('/', 'ImmigrantController@postIndex');
});