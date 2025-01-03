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
        Schema::create('dugun_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_adı');
            $table->decimal('miktar', 10, 2);
            $table->string('aciklama')->nullable();
            $table->foreignId('dugun_id')->constrained('duguns')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dugun_menus');
    }
};
