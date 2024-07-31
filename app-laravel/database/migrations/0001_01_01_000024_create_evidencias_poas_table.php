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
        Schema::create('evidencias_poas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_poa');
            $table->foreign('id_poa')->references('id')->on('poas');
            $table->mediumText('evidencia')->charset('binary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias_poas');
    }
};
