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
        Schema::create('fabrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suppliers_id')->constrained('suppliers')->nullable();
            $table->foreignId('type_fabrics_id')->constrained('type_fabrics')->nullable();
            $table->text('stok');
            // color_id
            // total_perColor
            // total
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrics');
    }
};
