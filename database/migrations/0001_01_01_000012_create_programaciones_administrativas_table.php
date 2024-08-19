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
        Schema::create('programaciones_administrativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meta');
            $table->foreign('id_meta')->references('id')->on('metas_administrativas');
            $table->integer('ene');
            $table->integer('feb');
            $table->integer('mar');
            $table->integer('abr');
            $table->integer('may');
            $table->integer('jun');
            $table->integer('jul');
            $table->integer('ago');
            $table->integer('sep');
            $table->integer('oct');
            $table->integer('nov');
            $table->integer('dic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programaciones_administrativas');
    }
};
