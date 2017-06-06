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

/* ROUTE TO ACCOUNT PAGE */
Route::get('account', 'PagesController@getAccount');

/* ROUTE TO CONTACT PAGE */
Route::get('contact', 'PagesController@getContact');

/* ROUTE TO ABOUT PAGE */
Route::get('about', 'PagesController@getAbout');

/* ROUTE TO INDEX PAGE */
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');