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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('package_id')->constrained()->onDelete('restrict');

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('amount', 10, 2)->nullable();

            $table->timestamp('cancelled_at')->nullable();
            $table->integer('employee_count')->default(0);
            $table->integer('storage_gb')->default(0);

            $table->json('metadata')->nullable();
            $table->enum('status', ['active', 'suspended', 'deactive'])->default('active');

            $table->timestamps();

            $table->index(['client_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
