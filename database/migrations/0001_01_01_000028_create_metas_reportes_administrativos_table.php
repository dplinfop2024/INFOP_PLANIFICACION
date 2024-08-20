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
        Schema::create('metas_reportes_administrativos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meta');
            $table->foreign('id_meta')->references('id')->on('metas_administrativas');
            $table->integer('porcentaje_trimestral');
            $table->string('observaciones', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas_reportes_administrativos');
    }
};
