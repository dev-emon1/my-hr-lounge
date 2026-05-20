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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('unid')->unique();        // PKG-000001
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('unit')->nullable();            // month, year, etc.
            $table->text('description')->nullable();
            $table->string('duration')->nullable();        // '30 days', '1 year'
            $table->integer('max_users')->nullable();      // Optional limits
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->index('status');
            $table->index(['status', 'price']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
