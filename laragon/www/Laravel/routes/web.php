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
Route::get('awal', function () {
    return view('menu.awal');
});
Route::get('home1', function () {
    return view('menu.home1');
});
Route::get('profile', function () {
    return view('menu.profile');
});
Route::get('contact', function () {
    return view('menu.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
