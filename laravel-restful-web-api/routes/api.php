<?php

use Illuminate\Http\Request;

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

// articles
Route::get('articles', 'ArticlesController@index');
Route::get('article/{id}', 'ArticlesController@show');
Route::post('article', 'ArticlesController@store');
Route::put('article', 'ArticlesController@store');
Route::delete('article/{id}', 'ArticlesController@destroy');

// user
Route::get('users/{id}', 'UserController@show');
Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store');

Route::delete('users/{id}', 'UserController@destroy');