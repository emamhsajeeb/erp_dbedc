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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('date');
            $table->string('symbol');
            $table->timestamps();
            $table->time('clockin')->nullable();
            $table->time('clockout')->nullable();
            $table->string('clockin_location')->nullable();
            $table->string('clockout_location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
