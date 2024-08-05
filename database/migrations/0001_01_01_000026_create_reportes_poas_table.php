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
        Schema::create('reportes_poas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_poa');
            $table->foreign('id_poa')->references('id')->on('poas');
            $table->string('trimestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes_poas');
    }
};
