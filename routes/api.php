<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'UserController@register');
Route::get('/logout', 'UserController@logout');
Route::post('/login', 'UserController@login');

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profiles', 'ProfilesController@index');
    Route::post('/profiles', 'ProfilesController@store');
    Route::put('/profiles/{id}', 'ProfilesController@update');
    Route::delete('/profiles/{id}', 'ProfilesController@destroy');
});




    


