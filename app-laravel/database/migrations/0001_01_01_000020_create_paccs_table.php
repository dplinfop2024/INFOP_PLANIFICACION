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
        Schema::create('paccs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_unidad');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('anio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paccs');
    }
};
