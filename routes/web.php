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

    Route::group(['prefix' => 'form'], function() {
        Route::get('add_likes', [
            'uses' => 'ApiVK@addTaskLike',
            'as' => 'AddTaskLike'
        ]);

        Route::get('add_follows', [
            'uses' => 'ApiVK@addTaskFollow',
            'as' => 'AddTaskFollow'
        ]);

        Route::get('add_friends', [
            'uses' => 'ApiVK@addTaskFriend',
            'as' => 'AddTaskFriend'
        ]);

        Route::get('add_interviews', [
            'uses' => 'ApiVK@addTaskInterview',
            'as' => 'AddTaskInterview'
        ]);

        Route::get('add_usersingroups', [
            'uses' => 'ApiVK@addTaskUserGroup',
            'as' => 'AddTaskLike'
        ]);

        Route::get('add_socials', [
            'uses' => 'ApiVK@addTaskSocial',
            'as' => 'AddTaskSocial'
        ]);

        Route::get('add_comments', [
            'uses' => 'ApiVK@addTaskSocialComments',
            'as' => 'AddComments'
        ]);
    });

    Route::group(['prefix' => 'table'], function() {
        Route::get('go_add_all', [
            'uses' => 'ApiVK@tableAddAll',
            'as' => 'TableAddAll'
        ]);

        Route::get('go_add_likes', [
            'uses' => 'ApiVK@tableAddLike',
            'as' => 'TableAddLike'
        ]);

        Route::get('go_add_follows', [
            'uses' => 'ApiVK@tableAddFollow',
            'as' => 'TableAddFollow'
        ]);

        Route::get('go_add_friends', [
            'uses' => 'ApiVK@tableAddFriend',
            'as' => 'TableAddFriend'
        ]);

        Route::get('go_add_interviews', [
            'uses' => 'ApiVK@tableAddInterview',
            'as' => 'TableAddInterview'
        ]);

        Route::get('go_add_groups', [
            'uses' => 'ApiVK@tableAddGroup',
            'as' => 'TableAddGroup'
        ]);

        Route::get('go_add_socials', [
            'uses' => 'ApiVK@tableAddSocial',
            'as' => 'TableAddSocial'
        ]);

        Route::get('go_add_comments', [
            'uses' => 'ApiVK@tableAddComments',
            'as' => 'TableAddComments'
        ]);
    });
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


