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

Route::get('/home', 'HomeController@index');


//Vehicles
Route::get('/vehicles',['uses' => 'VehiclesController@index', 'as' => 'vehiclePage']);
Route::get('/vehicles/create',['uses' => 'VehiclesController@create', 'as' =>'createVehicle']);
Route::post('/vehicles/store',['uses' => 'VehiclesController@store', 'as' =>'postCreateVehicle']);

//navigation
Route::get('/about','NavigationController@about');
Route::get('/terms','NavigationController@terms');
