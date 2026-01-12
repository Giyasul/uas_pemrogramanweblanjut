<?php
use App\Http\Controllers\OpiniController;

Route::get('/opini', [OpiniController::class, 'index']);
Route::get('/opini/{id}', [OpiniController::class, 'show']);
