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
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_Solicitud');
            $table->date('Fecha_Alquiler');
            $table->date('Fecha_Devolucion');
            $table->enum('Estado', ['Pendiente', 'En Proceso', 'Completado', 'Cancelado']);
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilers');
    }
};
