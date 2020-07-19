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

Route::group(['middleware' => 'auth'], function () {

  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('galeri/{id}/delete', 'GaleriController@hapus')->name('galeri.hapus');
  Route::resource('galeri', 'GaleriController');

  Route::get('kategori/{id}/delete', 'KategoriController@hapus')->name('kategori.hapus');
  Route::resource('kategori', 'KategoriController');

  Route::get('reservasi/{id}/delete', 'ReservasiController@hapus')->name('reservasi.hapus');
  Route::resource('reservasi', 'ReservasiController');

  Route::get('kontak/{id}/delete', 'KontakController@hapus')->name('kontak.hapus');
  Route::resource('kontak', 'KontakController');

  Route::get('tentang/{id}/delete', 'TentangController@hapus')->name('tentang.hapus');
  Route::resource('tentang', 'TentangController');

});
