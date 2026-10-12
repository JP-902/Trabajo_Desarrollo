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
        Schema::create('detalle__alquilers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alquiler_id')->constrained('alquilers');
            $table->foreignId('equipo_id')->constrained('equipos');
            $table->integer('Cantidad');
            $table->decimal('Precio_Alquiler', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__alquilers');
    }
};
