<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/development')->name('development.')->group(function(){
    Route::prefix('/mala')->name('mala.')->group(function(){
        Route::get('/coba1', function () {
            return view('development.mala.coba1');
        });
        Route::get('/coba2', function () {
            return view('development.mala.coba2');
        });
        Route::get('/coba3', function () {
            return view('development.mala.coba3');
        });
        Route::get('/coba4', function () {
            return view('development.mala.coba4');
        });
    });
    Route::prefix('/kulguy')->name('kulguy.')->group(function(){
        Route::get('/coba1', function () {
            return view('development.kulguy.coba1');
        });
        Route::get('/coba2', function () {
            return view('development.kulguy.coba2');
        });
        Route::get('/coba3', function () {
            return view('development.kulguy.coba3');
        });
        Route::get('/coba4', function () {
            return view('development.kulguy.coba4');
        });
    });
    Route::prefix('/famus')->name('famus')->group(function(){
        Route::get('/coba1', function () {
            return view('development.famus.coba1');
        });
        Route::get('/coba2', function () {
            return view('development.famus.coba2');
        });
        Route::get('/coba3', function () {
            return view('development.famus.coba3');
        });
        Route::get('/coba4', function () {
            return view('development.famus.coba4');
        });
    });
});

Route::resource('users', 'UserController');
Route::resource('wishes', 'WishController');

Route::prefix('/specializations')->name('specializations.')->group(function(){
    Route::get('/', 'SpecializationController@index')->name('index');
    Route::get('/create', 'SpecializationController@create')->name('create');
    Route::post('/', 'SpecializationController@store')->name('store');
    Route::get('/{id}', 'SpecializationController@show')->name('show');
    Route::get('/{id}/edit', 'SpecializationController@edit')->name('edit');
    Route::put('/{id}', 'SpecializationController@update')->name('update');
    Route::delete('/{id}', 'SpecializationController@destroy')->name('destroy');

    Route::prefix('/{sid}/courses')->name('courses.')->group(function(){
        Route::get('/', 'CourseController@index')->name('index');
        Route::get('/create', 'CourseController@create')->name('create');
        Route::post('/', 'CourseController@store')->name('store');
        Route::get('/{cid}', 'CourseController@show')->name('show');
        Route::get('/{cid}/edit', 'CourseController@edit')->name('edit');
        Route::put('/{cid}', 'CourseController@update')->name('update');
        Route::delete('/{cid}', 'CourseController@destroy')->name('destroy');

        Route::prefix('/{sid}/chapters')->name('chapters.')->group(function(){
            Route::get('/', 'ChapterController@index')->name('index');
            Route::get('/create', 'ChapterController@create')->name('create');
            Route::post('/', 'ChapterController@store')->name('store');
            Route::get('/{chid}', 'ChapterController@show')->name('show');
            Route::get('/{chid}/edit', 'ChapterController@edit')->name('edit');
            Route::put('/{chid}', 'ChapterController@update')->name('update');
            Route::delete('/{chid}', 'ChapterController@destroy')->name('destroy');

            Route::prefix('/{chid}/modules')->name('modules.')->group(function(){
                Route::get('/', 'ModuleController@index')->name('index');
                Route::get('/create', 'ModuleController@create')->name('create');
                Route::post('/', 'ModuleController@store')->name('store');
                Route::get('/{mid}', 'ModuleController@show')->name('show');
                Route::get('/{mid}/edit', 'ModuleController@edit')->name('edit');
                Route::put('/{mid}', 'ModuleController@update')->name('update');
                Route::delete('/{mid}', 'ModuleController@destroy')->name('destroy');

                Route::prefix('/{mid}/materials')->name('materials.')->group(function(){
                    Route::get('/', 'MaterialController@index')->name('index');
                    Route::get('/create', 'MaterialController@create')->name('create');
                    Route::post('/', 'MaterialController@store')->name('store');
                    Route::get('/{mlid}', 'MaterialController@show')->name('show');
                    Route::get('/{mlid}/edit', 'MaterialController@edit')->name('edit');
                    Route::put('/{mlid}', 'MaterialController@update')->name('update');
                    Route::delete('/{mlid}', 'MaterialController@destroy')->name('destroy');
                });
            });
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba1',function(){
    return view('coba.coba1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
