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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('company_name');
            $table->string('domain')->nullable()->nullable();  // company.hruniverse.com
            $table->string('subdomain')->unique()->nullable(); // e.g., 'acme'
            $table->string('email')->unique();
            $table->foreignId('package_id')->constrained();
            $table->json('branding')->nullable(); // logo, colors, etc.
            $table->json('features')->nullable(); // feature flags override
            $table->enum('status', ['active','trail','suspended','deactive']);
            $table->timestamp('suspended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
