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

// Route::post('wishes','WishController@update');

Route::get('/spec','SpecializationController@getSpecAPI');
Route::get('/specs/{id}','SpecializationController@getSpecAPIS');
Route::get('/chapter/{id}','ChapterController@getApiCall');
Route::get('/module/{id}','ModuleController@getAPICall');
Route::get('/course/{id}','CourseController@getAPICall');
Route::get('/wish', 'WishController@countNew');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
