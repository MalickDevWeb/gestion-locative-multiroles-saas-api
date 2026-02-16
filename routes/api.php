<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', fn () => response()->json([
    'status' => 'ok',
    'service' => config('app.name'),
    'timestamp' => now()->toIso8601String(),
]));

Route::get('/help', fn () => response()->json([
    'status' => 'ok',
    'service' => config('app.name'),
    'message' => 'API helper endpoints',
    'endpoints' => [
        'health' => url('/api/health'),
        'documentation' => url('/api/documentation'),
        'help' => url('/api/help'),
    ],
    'timestamp' => now()->toIso8601String(),
]));
