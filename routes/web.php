<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipsuratController;


//halaman utama
Route::get('/',[ArsipsuratController::class, 'index']);

//tambah
Route::get('/create', [ArsipsuratController::class, 'create']);

//simpan
Route::post('/store', [ArsipsuratController::class, 'store']);

//hapus berdasrkan id
Route::get('/delete/{id}', [ArsipsuratController::class, 'delete']);

//melihat berdasrkan id
Route::get('/view/{id}', [ArsipsuratController::class, 'view']);

//mengambil id untuk updatefile
Route::get('/update/{id}', [ArsipsuratController::class, 'updatefile']);

//menyimpan data update ke database
Route::post('/update', [ArsipsuratController::class, 'update']);

//halaman about
Route::get('/about', [ArsipsuratController::class, 'about']);


