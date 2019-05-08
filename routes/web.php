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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function() {
    Route::get('wine/create','Admin\WineController@add')->middleware('auth');
    Route::post('wine/create', 'Admin\WineController@create');
    Route::get('wine', 'Admin\WineController@index')->middleware('auth');
    Route::get('wine/edit', 'Admin\WineController@edit')->middleware('auth'); // 追記
    Route::post('wine/edit', 'Admin\WineController@update')->middleware('auth'); // 追記
    Route::get('wine/delete', 'Admin\WineController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
