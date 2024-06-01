<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TambahDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/storePhone', [\App\Http\Controllers\UserController::class, 'storePhone'])->name('storePhone');
Route::post('/storeUser', [\App\Http\Controllers\UserController::class, 'storeUser'])->name('storeUser');
Route::get('/createUser', [\App\Http\Controllers\UserController::class, 'createUser'])->name('createUser');
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

// Route::get('/tambah-data', [TambahDataController::class, 'tambah-data'])->name('tambah-data');

// Route::get('/tambah-data', [TambahDataController::class, 'tambahData'])->name('tambah-data');

// Route::get('/tambah-data', 'TambahDataController@tambahData');

// Route::post('/tambah-data', [TambahDataController::class, 'tambah-data'])->name('tambah-data');

// Route::get('/tambah-data', 'TambahDataController@index')->name('tambah-data');

// Route::post('/simpan-data', [TambahDataController::class, 'simpanData'])->name('simpan-data');
