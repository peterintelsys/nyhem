<?php



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
Route::get('areas/{areaid}/ansvariga', 'AreaController@ansvariga');
Route::get('areas/{areaid}/newansvariga/{houseid}', 'AreaController@newansvariga');
Route::get('areas/deleteansvariga/{houseid}/{areaid}', 'AreaController@deleteansvariga');
Route::resource('areas', 'AreaController');


Route::get('events/ok/{event}', 'EventController@statusnull');
Route::get('events/done/{event}', 'EventController@statusdone');
Route::get('events/newcreate/{id}', 'EventController@newcreate');
Route::resource('events', 'EventController');
Route::post('areaphotos', 'AreaPhotoController@store');

Route::get('admin/streets', 'AdminController@streets');
Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');
Route::get('admin/{id}', 'AdminController@show');
Route::delete('admin/{id}', 'AdminController@destroy');

