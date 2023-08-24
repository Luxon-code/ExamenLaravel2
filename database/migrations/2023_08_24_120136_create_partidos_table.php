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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->integer('goles_teamcasa')->nullable();
            $table->integer('goles_teamVisitante')->nullable();
            $table->integer('penaltis_teamcasa')->nullable();
            $table->integer('penaltis_teamVisitante')->nullable();
            $table->unsignedBigInteger('team_casa_id');
            $table->unsignedBigInteger('team_visitante_id');
            $table->foreign('team_casa_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('team_visitante_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
