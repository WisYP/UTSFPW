<?php

use App\Http\Controllers\barangController;

Route::get('/', [barangController::class, 'index'])->name('home');
Route::get('/input-barang', [barangController::class, 'input'])->name('process');
Route::post('/prosesBarang', [barangController::class, 'proses']);
Route::get('/edit-form/{id}', [BarangController::class, 'editForm'])->name('edit.form');
Route::post('/edit-form/{id}', [BarangController::class, 'edit'])->name('edit');


