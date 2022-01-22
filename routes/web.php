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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('Buku/index','BukuController@index');
Route::get('Buku/tambah','BukuController@tambah');
Route::post('Buku/simpan','BukuController@simpan');
Route::get('Buku/edit/{id}','BukuController@edit');
Route::put('Buku/update/{id}','BukuController@update');
Route::get('Buku/hapus/{id}','BukuController@hapus');

    });

