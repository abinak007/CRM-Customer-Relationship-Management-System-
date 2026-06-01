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
      Schema::create('leads', function (Blueprint $table) {
    $table->id();

    $table->string('lead_number')->unique();
    $table->date('lead_date');

    $table->string('customer_name');
    $table->string('company_name')->nullable();

    $table->string('mobile_number');
    $table->string('alternate_mobile')->nullable();

    $table->string('email')->nullable();

    $table->text('address')->nullable();
    $table->string('city')->nullable();
    $table->string('state')->nullable();
    $table->string('country')->nullable();

    $table->foreignId('source_id')
          ->constrained('lead_sources');

    $table->foreignId('priority_id')
          ->constrained('lead_priorities');

    $table->foreignId('stage_id')
          ->constrained('lead_stages');

    $table->foreignId('customer_care_id')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->foreignId('sales_executive_id')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->text('requirement_details')->nullable();
    $table->string('product_service')->nullable();
    $table->text('remarks')->nullable();

    $table->foreignId('created_by')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
