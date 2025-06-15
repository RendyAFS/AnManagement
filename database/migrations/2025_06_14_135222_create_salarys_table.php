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
        Schema::create('salarys', function (Blueprint $table) {
            $table->id();
            $table->text('data_salary');
            $table->foreignId('presences_id')->constrained('presences')->nullable();
            $table->foreignId('loans_id')->constrained('loans')->nullable();
            $table->text('total');
            // total_salary
            // aditional_data
            // special_case
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salarys');
    }
};
