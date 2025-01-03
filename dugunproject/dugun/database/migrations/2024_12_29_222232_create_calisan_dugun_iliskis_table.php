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
        Schema::create('calisan_dugun_iliski', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dugun_id')->constrained('duguns')->onDelete('cascade');
            $table->foreignId('calisan_id')->constrained('calisans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calisan_dugun_iliskis');
    }
};
