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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreEstablecimiento', 100);
            $table->string('slogan', 100);
            $table->string('logo', 250);
            $table->string('calleNumero', 100);
            $table->string('colonia', 100);
            $table->string('municipio', 100);
            $table->string('cp', 5);
            $table->string('estado', 3);
            $table->string('telefono1', 10);
            $table->string('telefono2', 10);
            $table->string('encargado', 100);
            $table->string('eMail', 100);
            $table->string('sitioWeb', 100);
            $table->string('faceBook', 250);
            $table->string('instagram', 250);
            $table->string('twitter', 250);
            $table->string('tikTok', 250);
            $table->string('youtube', 250);
            $table->string('status', 20);
            $table->boolean('lunesEstablecimiento');
            $table->time('horaInicioLunesEstablecimiento');
            $table->time('horaFinLunesEstablecimiento');
            $table->boolean('martesEstablecimiento');
            $table->time('horaInicioMartesEstablecimiento');
            $table->time('horaFinMartesEstablecimiento');
            $table->boolean('miercolesEstablecimiento');
            $table->time('horaInicioMiercolesEstablecimiento');
            $table->time('horaFinMiercolesEstablecimiento');
            $table->boolean('juevesEstablecimiento');
            $table->time('horaInicioJuevesEstablecimiento');
            $table->time('horaFinJuevesEstablecimiento');
            $table->boolean('viernesEstablecimiento');
            $table->time('horaInicioViernesEstablecimiento');
            $table->time('horaFinViernesEstablecimiento');
            $table->boolean('sabadoEstablecimiento');
            $table->time('horaInicioSabadoEstablecimiento');
            $table->time('horaFinSabadoEstablecimiento');
            $table->boolean('domingoEstablecimiento');
            $table->time('horaInicioDomingoEstablecimiento');
            $table->time('horaFinDomingoEstablecimiento');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establecimientos');
    }
};
