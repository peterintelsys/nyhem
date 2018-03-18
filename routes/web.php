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
Route::get('houses/garages', 'HouseController@garages');
Route::get('houses/noareas', 'HouseController@noareas');
Route::resource('houses', 'HouseController');
Route::resource('streetphotos', 'StreetPhotoController');
Route::get('areas/good', 'AreaController@statusgood');
Route::get('areas/notgood', 'AreaController@statusnotgood');
Route::get('areas/bad', 'AreaController@statusbad');
Route::resource('areas', 'AreaController');
Route::get('events/newcreate/{id}', 'EventController@newcreate');
Route::resource('events', 'EventController');
Route::post('areaphotos', 'AreaPhotoController@store');

Route::get('admin/streets', 'AdminController@streets');
Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');
Route::get('admin/{id}', 'AdminController@show');
Route::delete('admin/{id}', 'AdminController@destroy');

