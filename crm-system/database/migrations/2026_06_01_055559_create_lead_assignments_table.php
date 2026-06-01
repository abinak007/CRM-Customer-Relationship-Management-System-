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
        Schema::create('lead_assignments', function (Blueprint $table) {
    $table->id();

    $table->foreignId('lead_id')
          ->constrained('leads')
          ->cascadeOnDelete();

    $table->foreignId('assigned_by')
          ->constrained('users');

    $table->foreignId('customer_care_id')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->foreignId('sales_executive_id')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->datetime('assigned_date');

    $table->text('remarks')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_assignments');
    }
};
