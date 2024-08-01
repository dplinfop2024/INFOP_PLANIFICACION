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
        Schema::create('gastos_paccs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pacc');
            $table->foreign('id_pacc')->references('id')->on('paccs');
            $table->decimal('renglon', total:5, places:2);
            $table->string('descripcion');
            $table->decimal('monto', total:11, places:2);
            $table->string('unidad');
            $table->date('fecha_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_paccs');
    }
};
