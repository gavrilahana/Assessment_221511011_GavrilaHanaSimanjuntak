<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataKasirController;
use App\Http\Controllers\DataBarangNotaController;
use App\Http\Controllers\DataNotaController;
use App\Http\Controllers\DataTenanController;
use App\Http\Controllers\DataAkunController;
use App\Http\Controllers\KeluhanController;


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
    return view('Home');
})->name('home');

//Barang
Route::get('/dataBarang',[DataBarangController::class, 'barang'])->name('Barang');

Route::get('/tambahDataBarang',[DataBarangController::class, 'tambahDataBarang'])->name('tambahDataBarang');
Route::post('/insertDataBarang',[DataBarangController::class, 'insertDataBarang'])->name('insertDataBarang');

Route::get('/editDataBarang/{KodeBarang}', [DataBarangController::class, 'editDataBarang'])->name('editDataBarang');
Route::post('/updateDataBarang/{KodeBarang}', [DataBarangController::class, 'updateDataBarang'])->name('updateDataBarang');

Route::get('/deleteDataBarang/{KodeBarang}', [DataBarangController::class, 'deleteDataBarang'])->name('deleteDataBarang');

//Kasir
Route::get('/dataKasir',[DataKasirController::class, 'dataKasir'])->name('kasir');

//Tenan
Route::get('/dataTenan',[DataTenanController::class, 'dataTenan'])->name('tenan');
