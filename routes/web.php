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

Route::group(['prefix' => 'beheer', 'middleware' => 'auth'], function () {
    //GET
    Route::get('/kamers/nieuw', 'Rooms@create')->name('kamer-toevoegen');
    Route::get('/kamers/bewerken/{id}', 'Rooms@edit')->name('kamer-bewerken');
    Route::get('/kamers', 'Rooms@index')->name('kamers');

    //POST
    Route::post('/kamers/nieuw', 'Rooms@store');

    //PATCH
    Route::patch('/kamers/bewerken/{id}', 'Rooms@update');

    //DESTROY
    Route::delete('/kamers/verwijderen/{id}', 'Rooms@destroy')->name('kamer-verwijderen');
});
