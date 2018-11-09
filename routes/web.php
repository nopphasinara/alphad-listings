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

/* Auth
======================*/
Auth::routes();

/* Page
======================*/
Route::get('/', 'PagesController@index')->name('home');


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

/* Category
    ======================*/
Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/categories/{category}', 'CategoriesController@show')->name('categories.show');

/* Admin
======================*/
Route::namespace('Admin')->prefix('admin')->group(function () {

    /* Category
    ======================*/
    Route::get('/categories', 'CategoriesController@index')->name('admin.categories.index');

    Route::get('/categories/create', 'CategoriesController@create')->name('admin.categories.create');
    Route::post('/categories', 'CategoriesController@store')->name('admin.categories.store');

    Route::get('/categories/{category}/edit', 'CategoriesController@edit')->name('admin.categories.edit');
    Route::patch('/categories', 'CategoriesController@update')->name('admin.categories.update');

    Route::get('/categories/{category}', 'CategoriesController@show')->name('admin.categories.show');
});
