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
       Schema::create('lead_stage_histories', function (Blueprint $table) {
    $table->id();

    $table->foreignId('lead_id')
          ->constrained('leads')
          ->cascadeOnDelete();

    $table->foreignId('old_stage_id')
          ->nullable()
          ->constrained('lead_stages')
          ->nullOnDelete();

    $table->foreignId('new_stage_id')
          ->constrained('lead_stages');

    $table->foreignId('changed_by')
          ->nullable()
          ->constrained('users')
          ->nullOnDelete();

    $table->text('remarks')->nullable();

    $table->timestamp('changed_at');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_stage_histories');
    }
};
