<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\CompteController;
use App\Http\Controllers\Api\V1\TransactionController;

Route::get('/health', fn () => response()->json([
    'status' => 'ok',
    'service' => config('app.name'),
    'timestamp' => now()->toIso8601String(),
]));

Route::prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('comptes', CompteController::class);
    Route::apiResource('transactions', TransactionController::class);

    Route::post('comptes/{compte}/bloquer', [CompteController::class, 'bloquer']);
    Route::post('comptes/{compte}/debloquer', [CompteController::class, 'debloquer']);
});
