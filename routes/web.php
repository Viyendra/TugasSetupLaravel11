<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderController;

Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);

