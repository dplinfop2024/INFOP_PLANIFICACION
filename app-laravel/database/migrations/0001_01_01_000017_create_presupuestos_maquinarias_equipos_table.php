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
        Schema::create('presupuestos_maquinarias_equipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_presupuesto');
            $table->foreign('id_presupuesto')->references('id')->on('presupuestos');
            $table->string('anio');
            $table->decimal('total', total:11, places:2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuestos_maquinarias_equipos');
    }
};
