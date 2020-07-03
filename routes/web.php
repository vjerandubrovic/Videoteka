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

/* Ruta za home */

/*Route::get('/', function () 
{
    return view('welcome');
})->name('home'); */

Route::get('/', 'FilmsController@home')->name('home');

/**** Rute za Add movie ****/

/* Ruta za kreiranje filmova localhost:8000/films/create tamo koristi FilmsController s funkcijom create() i sve ovo zovemo films.create */
Route::get('/films/create', 'FilmsController@create')
    ->middleware('is_admin')
    ->name('films.create');

/* Ruta za prikaz svih filmova s određenim slovom localhost:8000/films/show tamo koristi FilmsController s funkcijom index() i sve ovo zovemo films.show */
Route::get('/films/show', 'FilmsController@index')->name('films.show');

/* Ruta za spremanje filmova u bazu localhost:8000/films tamo koristi FilmsController s funkcijom store() i sve ovo zovemo films.store */
Route::post('/films', 'FilmsController@store')->name('films.store');

/* Ruta za brisanje filmova u bazi localhost:8000/films/{id ili neki drugi podatak iz baze} tamo koristi FilmsController s funkcijom destroy() i sve ovo zovemo films.destroy */
Route::delete('/films/{film}', 'FilmsController@destroy')->name('films.destroy');



Auth::routes();

/* Ruta za home kada login-an */

Route::get('/', 'FilmsController@home')->name('home');
