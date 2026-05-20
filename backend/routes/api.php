<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Api\Auth\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Public Routes
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthenticationController::class, 'login']);
});

// Protected Routes
Route::middleware([
    'api',
    'auth:sanctum',
    'tenant',           // Set current tenant
    'tenant.active',    // Check subscription
    'throttle:api'
])->group(function () {

    Route::get('/me', [AuthenticationController::class, 'me']);
    Route::post('/logout', [AuthenticationController::class, 'logout']);

    // Super Admin Only Routes
    Route::middleware('superadmin')->prefix('admin')->group(function () {
        // Manage tenants, packages, global settings etc.
        Route::post('/register', [AuthenticationController::class, 'register']);
        Route::apiResource('clients', ClientController::class);
        Route::apiResource('packages', PackageController::class);
    });

    // Tenant-scoped normal routes (auto filtered by TenantScopedModel)
    // Route::apiResource('projects', ProjectController::class);
    // Route::apiResource('employees', EmployeeController::class);
});
