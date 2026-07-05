<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\ClientAuthController;

Route::prefix('auth')->group(function () {

    Route::post('/login', [ClientAuthController::class, 'login']);

    Route::middleware([
        'auth:sanctum',
        'tenant',
    ])->group(function () {

        Route::get('/me', [ClientAuthController::class, 'me']);

        Route::post('/logout', [ClientAuthController::class, 'logout']);

    });

});