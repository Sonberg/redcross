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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localize' ]], function() { 
    
    // Index
    Route::get('/', 'IndexController@getIndex');

    // Immigrant Form
    Route::get('/immigrant', 'Forms\ImmigrantController@getIndex');
    Route::post('/immigrant', 'Forms\ImmigrantController@postIndex');
    
    // Friend Form
    Route::get('/friend', 'Forms\FriendController@getIndex');
    Route::post('/friend', 'Forms\FriendController@postIndex');
    
});

Route::auth();
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'auth', 'localize' ]], function() { 
    
    // Index
    Route::get('/dashboard', 'Dashboard\DashboardController@getIndex');
    //List view
    Route::get('/dashboard/listview', 'Dashboard\ListviewController@getIndex');
    //Detailed view
    Route::get('/dashboard/detailedview', 'Dashboard\DetailedviewController@getIndex');
});

