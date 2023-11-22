<?php

use App\Http\Controllers\barangController;

Route::get('/', function (){
    return redirect("input-barang");
});

Route::get('/input-barang', [barangController::class, 'input']);
Route::post('/prosesBarang', [barangController::class, 'proses']);

Route::get('/utama', [barangController::class, 'praktikum']);
