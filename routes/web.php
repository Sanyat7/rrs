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
    return view('home');
});

Auth::routes();

Route::get('/home',['uses' => 'HomeController@index', 'as' => 'homePage']);


//Vehicles
Route::get('/vehicles',['uses' => 'VehiclesController@index', 'as' => 'vehiclePage']);
Route::get('/vehicles/create',['uses' => 'VehiclesController@create', 'as' =>'createVehicle']);
Route::post('/vehicles/store',['uses' => 'VehiclesController@store', 'as' =>'postCreateVehicle']);
Route::get('/vehicles/{id}/delete',['uses' => 'VehiclesController@deleteVehicle', 'as' =>'deleteVehicle']);
Route::get('/vehicles/{id}/edit',['uses' => 'VehiclesController@viewEditVehicle', 'as' =>'editVehicle']);
Route::post('/vehicles/{id}/update',['uses' => 'VehiclesController@postUpdateVehicle', 'as' =>'updateVehicle']);


//routes
Route::get('/routes',['uses' => 'RoutesController@index', 'as' => 'routePage']);
Route::get('/routes/create',['uses' => 'RoutesController@create', 'as' =>'createRoute']);
Route::post('/routes/store',['uses' => 'RoutesController@store', 'as' =>'postCreateRoute']);
Route::get('/routes/{id}/delete',['uses' => 'RoutesController@deleteRoute', 'as' =>'deleteRoute']);

//navigation
Route::get('/about',['uses' => 'NavigationController@about', 'as' => 'aboutPage']);
