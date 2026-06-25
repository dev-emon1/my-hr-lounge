<?php

use App\Http\Controllers\Api\V1\Auth\SuperAdminAuthController;
use App\Http\Controllers\Api\V1\SuperAdmin\PackageController;
use App\Http\Controllers\Api\V1\SuperAdmin\SubscriptionController;
use App\Http\Controllers\Api\V1\SuperAdmin\TenantController;
use App\Http\Controllers\Api\V1\SuperAdmin\PermissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Super Admin Auth Routes
|--------------------------------------------------------------------------
*/

// Public — login
Route::prefix('auth')->group(function () {
    Route::post('login',   [SuperAdminAuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('sa.auth.login');

    Route::post('refresh', [SuperAdminAuthController::class, 'refresh'])
        ->name('sa.auth.refresh');
});

// Public — other
Route::prefix('public')->group(function () {
    Route::get('packages', [PackageController::class, 'index'])->name('sa.public.packages');
});

// Protected — login 
Route::prefix('auth')->middleware('auth:super_admin')->group(function () {
    Route::get('me',                        [SuperAdminAuthController::class, 'me'])->name('sa.auth.me');
    Route::post('logout',                   [SuperAdminAuthController::class, 'logout'])->name('sa.auth.logout');
    Route::post('logout-all',               [SuperAdminAuthController::class, 'logoutAll'])->name('sa.auth.logout-all');
    Route::get('sessions',                  [SuperAdminAuthController::class, 'sessions'])->name('sa.auth.sessions');
    Route::delete('sessions/{session}',     [SuperAdminAuthController::class, 'revokeSession'])->name('sa.auth.sessions.revoke');
});

// Package management
// Route::middleware('auth:super_admin')->group(function () {
//     Route::apiResource('packages', PackageController::class);
// });

Route::middleware('auth:super_admin')->group(function () {

    Route::apiResource('packages', PackageController::class)
        ->except(['index']);

    Route::apiResource('subscriptions', SubscriptionController::class)
        ->only(['index', 'show']);

    Route::get(
        'permissions',
        [PermissionController::class, 'index']
    )->name('sa.permissions.index');

    Route::apiResource('tenants', TenantController::class)
        ->except(['destroy']);

    Route::post(
        'tenants/{id}/suspend',
        [TenantController::class, 'suspend']
    );

    Route::post(
        'tenants/{id}/activate',
        [TenantController::class, 'activate']
    );

    Route::get(
        'dashboard',
        [TenantController::class, 'dashboard']
    );
});