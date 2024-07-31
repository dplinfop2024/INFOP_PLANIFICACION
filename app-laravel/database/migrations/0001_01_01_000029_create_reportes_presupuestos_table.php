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
        Schema::create('reportes_presupuestos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_presupuesto');
            $table->foreign('id_presupuesto')->references('id')->on('presupuestos');
            $table->integer('trimestre');
            $table->integer('total_ejecutado');
            $table->integer('total_disponible');
            $table->string('observaciones', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes_presupuestos');
    }
};
