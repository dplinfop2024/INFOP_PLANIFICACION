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
        Schema::create('gastos_presupuestos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_presupuesto');
            $table->foreign('id_presupuesto')->references('id')->on('presupuestos');
            $table->unsignedBigInteger('id_subgrupo');
            $table->foreign('id_subgrupo')->references('id')->on('subgrupos_presupuestos');
            $table->decimal('valor', total:11, places:2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos_presupuestos');
    }
};
