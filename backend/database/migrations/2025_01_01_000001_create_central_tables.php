<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'pgsql';

    public function up(): void
    {
        // ── Packages ──────────────────────────────────────────
        Schema::create('packages', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price_monthly', 10, 2)->nullable();
            $table->decimal('price_yearly', 10, 2)->nullable();
            $table->jsonb('modules')->default('{}');
            $table->jsonb('limits')->default('{}');
            $table->jsonb('integrations')->default('{}');
            $table->boolean('is_trial')->default(false);
            $table->string('trial_period')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // ── Tenants ───────────────────────────────────────────
        Schema::create('tenants', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->string('company_name');
            $table->string('slug')->unique();
            $table->string('owner_name');
            $table->enum('client_type', ['demo', 'trail', 'internal_testing', 'individual', 'company'])->default('company');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->integer('total_employees')->default(0);
            $table->integer('employee_count')->default(0);
            // $table->string('database')->unique();
            $table->enum('status', ['pending','trial', 'active', 'suspended', 'cancelled', 'expired'])->default('trial');
            $table->timestamp('trial_ends_at')->nullable();
            $table->jsonb('settings')->default('{}');
            $table->string('timezone')->default('Asia/Dhaka');
            $table->string('country', 10)->default('BD');
            $table->string('domain')->nullable();
            $table->timestamps();
        });

        // ── Subscriptions ─────────────────────────────────────
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->foreignUuid('tenant_id')->constrained('tenants')->cascadeOnDelete();
            $table->foreignUuid('package_id')->nullable()->constrained('packages')->nullOnDelete();
            $table->string('billing_cycle')->default('monthly');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending','trial','active','suspended','cancelled','expired'])->default('trial');
            $table->timestamp('current_period_start')->nullable();
            $table->timestamp('current_period_end')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();
        });

        // ── Super Admin Users ─────────────────────────────────
        Schema::create('super_admins', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('status')->default('active');
            $table->integer('login_attempts')->default(0);
            $table->timestamp('locked_until')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->text('two_factor_secret')->nullable();
            $table->boolean('two_factor_enabled')->default(false);
            $table->timestamp('two_factor_confirmed_at')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // ── Super Admin Sessions ───────────────────────────────
        Schema::create('super_admin_sessions', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->foreignUuid('super_admin_id')->constrained('super_admins')->cascadeOnDelete();
            $table->string('refresh_token_hash')->unique();
            $table->string('device_name')->nullable();
            $table->string('device_type', 20)->nullable();
            $table->string('browser', 100)->nullable();
            $table->string('os', 100)->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->boolean('is_suspicious')->default(false);
            $table->timestamp('last_active_at')->nullable();
            $table->timestamp('expires_at');
            $table->timestamp('revoked_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        // ── Super Admin Roles ─────────────────────────────────
        // Super Admin নিজের team এর জন্য dynamic roles বানাতে পারবে
        Schema::create('super_admin_roles', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->string('name');
            $table->string('slug')->unique();
            $table->jsonb('permissions')->default('[]');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('super_admin_role_user', function (Blueprint $table) {
            $table->foreignUuid('super_admin_id')->constrained('super_admins')->cascadeOnDelete();
            $table->foreignUuid('role_id')->constrained('super_admin_roles')->cascadeOnDelete();
            $table->primary(['super_admin_id', 'role_id']);
        });

        // ── System Audit Log ──────────────────────────────────
        Schema::create('system_audit_logs', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->uuid('actor_id')->nullable();
            $table->string('actor_type')->nullable();
            $table->string('action');
            $table->string('resource_type')->nullable();
            $table->uuid('resource_id')->nullable();
            $table->jsonb('payload')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        // ── Sanctum Personal Access Tokens ───────────────────
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->uuidMorphs('tokenable');
            // $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
        Schema::dropIfExists('system_audit_logs');
        Schema::dropIfExists('super_admin_role_user');
        Schema::dropIfExists('super_admin_roles');
        Schema::dropIfExists('super_admin_sessions');
        Schema::dropIfExists('super_admins');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('tenants');
        Schema::dropIfExists('packages');
    }
};
