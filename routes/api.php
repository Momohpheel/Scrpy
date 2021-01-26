<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'Auth\LoginController@login');
        Route::post('register', 'Auth\RegisterController@register');

        //Route::get('users', '');
    });
    Route::post('profile', 'UserController@createUserProfile')->middleware('auth:api');
    Route::get('profile', 'UserController@getUserProfile')->middleware('auth:api');
    Route::group(['prefix' => 'user'], function () {
        Route::get('profiles', 'UserController@getAllUsers');
        Route::delete('delete/{id}', 'UserController@deleteUser');
    });

});


