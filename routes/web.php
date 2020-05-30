<?php

use Illuminate\Support\Facades\Route;

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

Route::get('doctors','DoctorController@index')->name('doctor.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('doctor/create','DoctorController@create')->name('doctor.create');
Route::post('doctor/create','DoctorController@store')->name('store');
Route::get('edit/{id}','DoctorController@edit')->name('edit');
Route::post('update/{id}','DoctorController@update')->name('update');