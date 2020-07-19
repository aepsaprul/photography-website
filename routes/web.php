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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/reservasi', 'ReservasiController@index')->name('reservasi.index');
Route::post('/reservasi/store', 'ReservasiController@store')->name('reservasi.store');

Route::get('/galeri', 'GaleriController@index')->name('galeri');

Route::get('/kontak', 'KontakController@index')->name('kontak');

Route::get('/tentang', 'TentangController@index')->name('tentang');
