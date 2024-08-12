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
        Schema::create('api_requests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('counterweight_type', 60);
            $table->string('material', 60);
            $table->integer('gate_opening');
            $table->string('gate_height', 60);
            $table->string('clearance_under_gate', 60);
            $table->string('guide', 60);
            $table->string('total_length', 60);
            $table->string('pages', 60);
            $table->string('pipe_angle', 60);
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_requests');
    }
};
