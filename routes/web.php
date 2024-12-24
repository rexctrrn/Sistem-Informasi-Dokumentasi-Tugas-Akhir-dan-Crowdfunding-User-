<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasAkhirController;

Route::get('/',[TugasAkhirController::class, 'index'])->name('index');
Route::get('/view/{id}',[TugasAkhirController::class, 'view'])->name('view');


Route::get('/panduan', function () {
    return view('panduan');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pencarian', function () {
    return view('pencarian');
});
Route::get('/detail_skripsi', function () {
    return view('detail_skripsi');
});
