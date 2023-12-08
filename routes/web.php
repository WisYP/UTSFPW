<?php

use App\Http\Controllers\barangController;

Route::get('/', [barangController::class, 'index'])->name('home');
Route::get('/input', [barangController::class, 'input'])->name('process');
Route::post('/prosesBarang', [barangController::class, 'proses']);
Route::get('/edit-form/{id}', [BarangController::class, 'editForm'])->name('edit.form');
Route::post('/edit-form/{id}', [BarangController::class, 'edit'])->name('edit');
Route::get('/hapus/{id}', [BarangController::class, 'delete'])->name('barang.destroy');


