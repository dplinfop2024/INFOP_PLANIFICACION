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
        Schema::create('subgrupos_presupuestos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_grupo');
            $table->foreign('id_grupo')->references('id')->on('grupos_presupuestos');
            $table->integer('numero');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subgrupos_presupuestos');
    }
};
