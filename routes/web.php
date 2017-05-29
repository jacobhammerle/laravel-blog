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

/* ROUTE TO ABOUT PAGE */
Route::get('contact', 'PagesController@getContact');

/* ROUTE TO ABOUT PAGE */
Route::get('about', 'PagesController@getAbout');

/* ROUTE TO INDEX PAGE */
Route::get('/', 'PagesController@getIndex');