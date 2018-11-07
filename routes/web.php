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

/* Auth
======================*/
Auth::routes();


/* company
======================*/
Route::get('/companies', 'CompaniesController@index')->name('companies.index');
Route::get('/companies/search', 'CompaniesController@search')->name('companies.search');

Route::get('/companies/create', 'CompaniesController@create')->name('companies.create');
Route::post('/companies', 'CompaniesController@store')->name('companies.store');

Route::get('/companies/edit', 'CompaniesController@edit')->name('companies.edit');
Route::patch('/companies', 'CompaniesController@update')->name('companies.update');

Route::get('/companies/{company}', 'CompaniesController@show')->name('companies.show');


/* Listings
======================*/
Route::get('listings', 'ListingsController@index')->name('listings.index');
Route::get('/listings/search', 'ListingsController@search')->name('listings.search');

Route::get('listings/create', 'ListingsController@create')->name('listings.create');
Route::post('listings', 'ListingsController@store')->name('listings.store');

Route::get('/listings/{listing}/edit', 'ListingsController@edit')->name('listings.edit');
Route::patch('/listings/{listing}', 'ListingsController@update')->name('listings.update');

Route::get('/listings/{listing}', 'ListingsController@show')->name('listings.show');


Route::get('/home', 'HomeController@index')->name('home');
