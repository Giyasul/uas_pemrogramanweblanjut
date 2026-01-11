<?php

use 
app\Http\Controllers\BeritaController;

Route::get('/berita'),
[BeritaController::class,'berita']);
Route::get('/berita/{id}'
[BeritaController::class,'show']);
