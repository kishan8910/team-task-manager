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

// list tasks
Route::get('/tasks', 'TaskController@index');

// get a single task
Route::get('/task/{id}', 'TaskController@show');

// update a task
Route::put('/task', 'TaskController@store');

// delete a task
Route::delete('/task/{id}', 'TaskController@destroy');

// create a task
Route::post('/task', 'TaskController@store');
