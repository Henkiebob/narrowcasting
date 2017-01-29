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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'beheer'], function () {
    //GET
    Route::get('/kamers/nieuw', 'Rooms@create');
    Route::get('/kamers', 'Rooms@index');

    //POST
    Route::post('/kamers/nieuw', 'Rooms@store');
});
