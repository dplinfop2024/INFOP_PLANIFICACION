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
        Schema::create('gastos_maquinarias_equipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_presupuesto_me');
            $table->foreign('id_presupuesto_me')->references('id')->on('presupuestos_maquinarias_equipos');
            $table->unsignedBigInteger('id_renglon');
            $table->foreign('id_renglon')->references('id')->on('renglones_maquinarias_equipos');
            $table->string('descripcion');
            $table->decimal('valor', total:11, places:2);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_maquinarias_equipos');
    }
};
