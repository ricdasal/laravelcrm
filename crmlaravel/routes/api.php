<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CustomerController;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!']);
});

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);