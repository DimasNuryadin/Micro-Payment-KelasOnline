<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebhookController;

// Orders
Route::post('/orders', [OrderController::class, 'create']);
Route::get('/orders', [OrderController::class, 'index']);

// Webhook
Route::post('/webhook', [WebhookController::class, 'midtransHandler']);
