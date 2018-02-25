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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('streets', 'StreetController');
Route::resource('houses', 'HouseController');
Route::resource('streetphotos', 'StreetPhotoController');
Route::resource('areas', 'AreaController');
Route::post('areaphotos', 'AreaPhotoController@store');

Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');
Route::get('admin/{id}', 'AdminController@show');
Route::delete('admin/{id}', 'AdminController@destroy');

