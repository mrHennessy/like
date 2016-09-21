<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses' => 'User@index',
    'as' => 'UserIndexPage'
]);

Route::get('personalboard', [
    'uses' => 'User@board',
    'as' => 'PersonalBoard'
]);

Route::group(['prefix' => 'vkontakte'], function() {
    Route::get('spend', [
        'uses' => 'User@spend',
        'as' => 'SpendUser'
    ]);

    Route::get('work', [
        'uses' => 'User@work',
        'as' => 'WorkUser'
    ]);
});

Route::get('partner', [
    'uses' => 'User@partner',
    'as' => 'PartnerUser'
]);

Route::get('feedback', [
    'uses' => 'User@feedback',
    'as' => 'FeedbackUser'
]);

Route::get('store', [
    'uses' => 'User@store',
    'as' => 'StoreUser'
]);

Route::get('free', [
    'uses' => 'User@free',
    'as' => 'FreeUser'
]);


