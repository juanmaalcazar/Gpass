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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();

//});
//Route::apiResource('controller', 'Controller');

Route::apiResource('users', 'UsersController');

Route::apiResource('passwords', 'PasswordsController');
Route::apiResource('roles', 'RolesController');

Route::apiResource('categories', 'CategoriesController');

Route::Post('login','LoginController@login');

