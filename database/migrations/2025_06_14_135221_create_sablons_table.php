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
        Schema::create('sablons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fabrics_id')->constrained('fabrics')->nullable();
            $table->foreignId('layers_id')->constrained('layers')->nullable();
            $table->foreignId('pictures_id')->constrained('pictures')->nullable();
            $table->text('data_sablons');
            // employees_id
            // colors_id
            // type_fabrics_id
            // fabrics_lenght
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sablons');
    }
};
