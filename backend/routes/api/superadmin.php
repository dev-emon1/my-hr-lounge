<?php

use App\Http\Controllers\Api\V1\Auth\SuperAdminAuthController;
use App\Http\Controllers\Api\V1\SuperAdmin\PackageController;
use App\Http\Controllers\Api\V1\SuperAdmin\PermissionController;
use App\Http\Controllers\Api\V1\SuperAdmin\RegistryController;
use App\Http\Controllers\Api\V1\SuperAdmin\SubscriptionController;
use App\Http\Controllers\Api\V1\SuperAdmin\TenantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Super Admin API Routes
|--------------------------------------------------------------------------
|
| Prefix      : /api/v1/sa
| Guard       : super_admin
| Middleware  : auth:super_admin
|
*/

/*
|--------------------------------------------------------------------------
| Authentication (Public)
|--------------------------------------------------------------------------
*/

Route::prefix('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::post(
        'login',
        [SuperAdminAuthController::class, 'login']
    )
        ->middleware('throttle:5,1')
        ->name('sa.auth.login');

    /*
    |--------------------------------------------------------------------------
    | Refresh Access Token
    |--------------------------------------------------------------------------
    */

    Route::post(
        'refresh',
        [SuperAdminAuthController::class, 'refresh']
    )
        ->name('sa.auth.refresh');
});

/*
|--------------------------------------------------------------------------
| Public APIs
|--------------------------------------------------------------------------
*/

Route::prefix('public')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Packages
    |--------------------------------------------------------------------------
    */

    Route::get(
        'packages',
        [PackageController::class, 'index']
    )->name('sa.public.packages');
});

/*
|--------------------------------------------------------------------------
| Protected APIs
|--------------------------------------------------------------------------
*/

Route::middleware('auth:super_admin')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

    Route::prefix('auth')->group(function () {

        Route::get(
            'me',
            [SuperAdminAuthController::class, 'me']
        )->name('sa.auth.me');

        Route::post(
            'logout',
            [SuperAdminAuthController::class, 'logout']
        )->name('sa.auth.logout');

        Route::post(
            'logout-all',
            [SuperAdminAuthController::class, 'logoutAll']
        )->name('sa.auth.logout-all');

        Route::get(
            'sessions',
            [SuperAdminAuthController::class, 'sessions']
        )->name('sa.auth.sessions');

        Route::delete(
            'sessions/{session}',
            [SuperAdminAuthController::class, 'revokeSession']
        )->name('sa.auth.sessions.revoke');
    });

    /*
    |--------------------------------------------------------------------------
    | Registry APIs
    |--------------------------------------------------------------------------
    |
    | Source of Truth
    | Reads from config/hr-lounge/*
    |
    */

    Route::prefix('registry')->group(function () {

        Route::get(
            'modules',
            [RegistryController::class, 'modules']
        )->name('sa.registry.modules');

        Route::get(
            'features',
            [RegistryController::class, 'features']
        )->name('sa.registry.features');

        Route::get(
            'templates',
            [RegistryController::class, 'templates']
        )->name('sa.registry.templates');

        Route::get(
            'permissions',
            [RegistryController::class, 'permissions']
        )->name('sa.registry.permissions');
    });

    /*
    |--------------------------------------------------------------------------
    | Permission Management
    |--------------------------------------------------------------------------
    */

    Route::get(
        'permissions',
        [PermissionController::class, 'index']
    )->name('sa.permissions.index');

    /*
    |--------------------------------------------------------------------------
    | Package Management
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'packages',
        PackageController::class
    )->except([
        'index',
    ]);

    Route::patch(
        'packages/{package}/status',
        [PackageController::class, 'status']
    )->name('sa.packages.status');

    /*
    |--------------------------------------------------------------------------
    | Subscription Management
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'subscriptions',
        SubscriptionController::class
    )->only([
        'index',
        'show',
    ]);

    /*
    |--------------------------------------------------------------------------
    | Tenant Management
    |--------------------------------------------------------------------------
    */

    Route::apiResource(
        'tenants',
        TenantController::class
    )->except([
        'destroy',
    ]);

    Route::post(
        'tenants/{id}/suspend',
        [TenantController::class, 'suspend']
    )->name('sa.tenants.suspend');

    Route::post(
        'tenants/{id}/activate',
        [TenantController::class, 'activate']
    )->name('sa.tenants.activate');

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get(
        'dashboard',
        [TenantController::class, 'dashboard']
    )->name('sa.dashboard');

    /*
    |--------------------------------------------------------------------------
    | Package Preview
    |--------------------------------------------------------------------------
    */
    Route::post(
        'packages/preview',
        [PackageController::class, 'preview']
    );

    Route::apiResource(
        'packages',
        PackageController::class
    );
});