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
        Schema::create('gym_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gym_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('gym_id')->references('id')->on('gyms');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_service');
    }
};
