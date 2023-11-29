<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route group untuk rute-rute API
Route::group(['prefix' => 'api'], function () {

    // Rute untuk mendapatkan semua data barang
    Route::get('/barang', 'BarangController@barang');

    // Rute untuk mendapatkan satu data barang berdasarkan KodeBarang
    Route::get('/barang/{KodeBarang}', 'BarangController@show');

    // Rute untuk menambahkan data barang baru
    Route::post('/barang', 'BarangController@store');

    // Rute untuk mengupdate data barang berdasarkan KodeBarang
    Route::put('/barang/{KodeBarang}', 'BarangController@update');

    // Rute untuk menghapus data barang berdasarkan KodeBarang
    Route::delete('/barang/{KodeBarang}', 'BarangController@destroy');
});
