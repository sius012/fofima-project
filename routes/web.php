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

Route::get('/transaksi',  'TransaksiController@index');
Route::get('/dashboard', function () {
    return view('welcome');
});
Route::post('/transaksi/memasukan', 'TransaksiController@prosestransaksi');
Route::get('/transaksi/tabel', 'TransaksiController@tampilkan');
Route::get('/BukuBesar', 'BukuBesarController@index')->name("buku-besar");
Route::match(['get','post'],'/BukuBesar/cari', 'BukuBesarController@tampilkan');
Route::get('/neracaLajur', 'NeracaLajurController@index');
Route::post('/neracaLajur/cari', 'NeracaLajurController@cari');


