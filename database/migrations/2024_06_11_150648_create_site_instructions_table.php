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
        Schema::create('site_instructions', function (Blueprint $table) {
            $table->id();
            $table->string('si_no');
            $table->string('ref_no');
            $table->string('si_type');
            $table->date('issue_date');
            $table->text('chainages');
            $table->text('details');
            $table->string('status');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_instructions');
    }
};
