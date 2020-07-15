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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kontak', 'KontakController@index')->name('kontak');
Route::get('/tentang', 'TentangController@index')->name('tentang');
