<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuxuryCarController;

Route::get('/', [LuxuryCarController::class, 'index']);
Route::get('/katalog', [LuxuryCarController::class, 'katalog']);
Route::get('/katalog/{id}', [LuxuryCarController::class, 'detail']);