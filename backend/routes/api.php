<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — v1
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {

    // ── Super Admin ───────────────────────────────────────────
    // Central schema — tenant middleware নেই
    Route::prefix('sa')->group(base_path('routes/api/superadmin.php'));

    // ── Health Check ──────────────────────────────────────────
    Route::get('health', fn() => response()->json([
        'status'    => 'ok',
        'timestamp' => now()->toISOString(),
    ]));
});