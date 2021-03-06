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

  route::resource('/articles','articlesController');
  Route::resource('comments', 'CommentsController');
  // route::get('test','articlesController@index')->name('artikel');

Route::get('profile','StaticsController@profile')->name('profile');
Route::get('home','StaticsController@home')->name('home');
