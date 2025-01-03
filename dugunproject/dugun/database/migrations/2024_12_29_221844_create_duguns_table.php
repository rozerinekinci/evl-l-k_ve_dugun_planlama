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
        Schema::create('duguns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musteri_id')->constrained('musteris');
            $table->string('dugun_ismi');
            $table->date('dugun_tarihi');
            $table->foreignId('mekan')->constrained('mekans');
            $table->foreignId('muzik_eglence_id')->constrained('muzik_eglences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duguns');
    }
};
