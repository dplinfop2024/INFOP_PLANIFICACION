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
        Schema::create('metas_administrativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_poa');
            $table->foreign('id_poa')->references('id')->on('poas');
            $table->unsignedBigInteger('id_linea');
            $table->foreign('id_linea')->references('id')->on('lineas_estrategicas');
            $table->string('descripcion', 500);
            $table->string('unidad_medida');
            $table->integer('numero');
            $table->integer('programacion_anual');
            $table->decimal('presupuesto_meta', total:11, places:2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas_administrativas');
    }
};
