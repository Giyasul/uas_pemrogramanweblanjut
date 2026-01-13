<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/about', function () {
    return view('layanan.about');
});
Route::get('/contact', function () {
    return view('layanan.kontak');
});
Route::get('/redaksi', function () {
    return view('layanan.redaksi');
});
Route::get('/kirim', function () {
    return view('layanan.kirim_artikel');
});
Route::get('/pedoman', function () {
    return view('layanan.pedoman');
});
Route::get('/kode', function () {
    return view('layanan.kode_etik');
});
Route::get('/disclaimer', function () {
    return view('layanan.disclaimer');
});
Route::get('/', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);
Route::get('/beritanav', [BeritaController::class, 'beritanav']);
Route::get('/kategori/{id}', [BeritaController::class, 'kategori']);

