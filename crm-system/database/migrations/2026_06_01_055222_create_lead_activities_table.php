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
        Schema::create('lead_activities', function (Blueprint $table) {
    $table->id();

    $table->foreignId('lead_id')
          ->constrained('leads')
          ->cascadeOnDelete();

    $table->enum('activity_type', [
        'Phone Call',
        'Meeting',
        'Email',
        'WhatsApp',
        'Site Visit',
        'Proposal Submission'
    ]);

    $table->date('activity_date');
    $table->time('activity_time')->nullable();

    $table->text('description')->nullable();
    $table->text('outcome')->nullable();
    $table->text('next_action')->nullable();

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
        Schema::dropIfExists('lead_activities');
    }
};
