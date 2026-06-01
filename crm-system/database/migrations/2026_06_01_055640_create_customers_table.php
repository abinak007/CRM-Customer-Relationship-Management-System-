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
        Schema::create('customers', function (Blueprint $table) {
    $table->id();

    $table->string('customer_code')->unique();

    $table->foreignId('lead_id')
          ->nullable()
          ->constrained('leads')
          ->nullOnDelete();

    $table->string('customer_name');
    $table->string('contact_person')->nullable();

    $table->string('mobile_number');
    $table->string('email')->nullable();

    $table->text('address')->nullable();

    $table->string('gst_number')->nullable();

    $table->string('industry_type')->nullable();

    $table->foreignId('category_id')
          ->nullable()
          ->constrained('customer_categories')
          ->nullOnDelete();

    $table->enum('status', ['Active', 'Inactive'])
          ->default('Active');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
