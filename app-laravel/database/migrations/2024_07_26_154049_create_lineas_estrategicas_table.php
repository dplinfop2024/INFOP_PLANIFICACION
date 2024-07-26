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
        Schema::create('lineas_estrategicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_componente');
            $table->foreign('id_componente')->references('id')->on('componentes');
            $table->integer('numero');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineas_estrategicas');
    }
};
