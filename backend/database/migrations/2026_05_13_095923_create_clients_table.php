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
            $table->string('slug')->unique();
            $table->string('company_name');
            $table->string('domain')->nullable();           // Custom domain
            $table->string('subdomain')->unique()->nullable();

            $table->foreignId('package_id')->constrained()->onDelete('restrict');

            $table->json('branding')->nullable();
            $table->json('features')->nullable();           // Feature flag overrides
            $table->enum('status', ['active', 'trial', 'suspended', 'deactive', 'expired'])
                ->default('active');

            $table->timestamp('suspended_at')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamps();

            $table->index('subdomain');
            $table->index('domain');
            $table->index('status');
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
