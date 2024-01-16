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

        Schema::create('car_data', function (Blueprint $table) {
            $table->id();
            $table->text('merk')->nullable();
            $table->text('model')->nullable();
            $table->text('plat_no')->nullable();
            $table->integer('tarif');
            $table->integer('stock')->default(0);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_data');
    }
};
