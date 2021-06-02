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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/listmenu', 'MakananController@index')->name('listmenu');
Route::get('/listmenu/tambah', 'MakananController@tambah')->name('listTambah');
Route::post('listmenu/store', 'MakananController@store')->name('listStore');
Route::get('/listmenu/edit/{id}', 'MakananController@edit')->name('listEdit');
Route::post('listmenu/update', 'MakananController@update')->name('listUpdate');
Route::get('/listmenu/hapus/{id}', 'MakananController@delete')->name('listDelete');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');

Route::get('/about', function () {
    return view('about');
})->name('about');
