<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api'], function () {

    Route::post('users/login/test', 'AuthController@loginMasuk');
    Route::post('users', 'AuthController@register');

    Route::middleware(['jwt.verify'])->group(function () {
        Route::post('users/logout', 'AuthController@logout');

        Route::get('fetch/user', 'AuthController@checkUser');
        Route::post('store', 'AuthController@store');
    });

    // t('Route::get('user', 'UserController@index');
    // Route::match(['put', 'patch'], 'user', 'UserController@update');

    // Route::get('profiles/{user}', 'ProfileController@show');
    // Route::posprofiles/{user}/follow', 'ProfileController@follow');
    Route::delete('profiles/{user}/follow', 'ProfileController@unFollow');

    Route::get('articles/feed', 'FeedController@index');
    Route::post('articles/{article}/favorite', 'FavoriteController@add');
    Route::delete('articles/{article}/favorite', 'FavoriteController@remove');

    Route::resource('articles', 'ArticleController', [
        'except' => [
            'create', 'edit'
        ]
    ]);

    Route::resource('articles/{article}/comments', 'CommentController', [
        'only' => [
            'index', 'store', 'destroy'
        ]
    ]);

    Route::get('tags', 'TagController@index');
    Route::get('statuses', 'StatusController@index');
}); 