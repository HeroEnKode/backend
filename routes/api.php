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

//Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('/empresas', 'SystemUnitController@show');
    Route::post('/empresas/add', 'SystemUnitController@store');
    Route::delete('/empresas/delete', 'SystemUnitController@destroy');
    Route::put('/empresas/update', 'SystemUnitController@update');
    Route::get('/empresas/update', 'SystemUnitController@edit');

//});




    


