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

Route::get('/', 'PageController@index');

Route::get('/pages/product/{id}', 'PageController@products');

Route::get('/single/{id}', 'PageController@single')->middleware('auth');

Route::get('/about', 'PageController@about');

Route::post('/pages/measurements', 'PageController@measurement')->middleware('auth');

Route::get('/pages/take-measurement', 'PageController@takeMeasurement')->middleware('auth');


// Route::view('/', 'auth.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/dashboard', 'UserController@dashboard');

Route::resource('users', 'UserController');

Route::get('/home', 'HomeController@index');

Route::resource('roles', 'RoleController');

Route::resource('categories', 'CategoryController');

Route::resource('products', 'ProductController');

Route::resource('measurements', 'MeasurementController');

