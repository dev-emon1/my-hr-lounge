<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('cascade');

            $table->string('user_name');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();

            $table->enum('type', ['super_admin', 'admin', 'user'])->default('user');
            $table->boolean('status')->default(true);
            $table->timestamptz('last_login')->current();
            // $table->boolean('mfa_enabled')->default(true);
            // $table->string('mfa_secret')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->index(['client_id', 'status']);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
