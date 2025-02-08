<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::post('/orders', [OrderController::class, 'create']);
Route::get('/orders', [OrderController::class, 'index']);
