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
        Schema::create('avances_metas_administrativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meta');
            $table->foreign('id_meta')->references('id')->on('metas_administrativas');
            $table->integer('mes');
            $table->integer('programacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avances_metas_administrativas');
    }
};
