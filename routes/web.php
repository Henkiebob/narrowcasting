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
<<<<<<< HEAD
    Route::get('/activiteit/nieuw/{room_id}', 'Activities@create')->name('activiteit-toevoegen');

    //POST
    Route::post('/kamers/nieuw', 'Rooms@store');
    Route::post('/activiteit/nieuw/{room_id}', 'Activities@store');
=======

    //POST
    Route::post('/kamers/nieuw', 'Rooms@store');
>>>>>>> 9663c25e9d487dddb35e9aab9511365b0e3822dd

    //PATCH
    Route::patch('/kamers/bewerken/{id}', 'Rooms@update');

    //DESTROY
    Route::delete('/kamers/verwijderen/{id}', 'Rooms@destroy')->name('kamer-verwijderen');
});
