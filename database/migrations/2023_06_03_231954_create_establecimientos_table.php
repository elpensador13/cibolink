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

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nombreEstablecimiento', 100);
            $table->string('slogan', 100) -> nullable();
            $table->string('logo', 250) -> nullable();
            $table->string('calleNumero', 100);
            $table->string('colonia', 100);
            $table->string('municipio', 100) -> nullable();
            $table->string('cp', 5);
            $table->string('estado', 100)-> nullable();
            $table->string('telefono1', 10);
            $table->string('telefono2', 10) -> nullable();
            $table->string('encargado', 100);
            $table->string('email', 100);
            $table->string('sitioWeb', 100) -> nullable();
            $table->string('faceBook', 250) -> nullable();
            $table->string('instagram', 250) -> nullable();
            $table->string('twitter', 250) -> nullable();
            $table->string('tikTok', 250) -> nullable();
            $table->string('youtube', 250) -> nullable();
            $table->string('status', 20);
            $table->boolean('lunesEstablecimiento') -> nullable();
            $table->time('horaInicioLunesEstablecimiento') -> nullable();
            $table->time('horaFinLunesEstablecimiento') -> nullable();
            $table->boolean('martesEstablecimiento') -> nullable();
            $table->time('horaInicioMartesEstablecimiento') -> nullable();
            $table->time('horaFinMartesEstablecimiento') -> nullable();
            $table->boolean('miercolesEstablecimiento') -> nullable();
            $table->time('horaInicioMiercolesEstablecimiento') -> nullable();
            $table->time('horaFinMiercolesEstablecimiento') -> nullable();
            $table->boolean('juevesEstablecimiento') -> nullable();
            $table->time('horaInicioJuevesEstablecimiento') -> nullable();
            $table->time('horaFinJuevesEstablecimiento') -> nullable();
            $table->boolean('viernesEstablecimiento') -> nullable();
            $table->time('horaInicioViernesEstablecimiento') -> nullable();
            $table->time('horaFinViernesEstablecimiento') -> nullable();
            $table->boolean('sabadoEstablecimiento') -> nullable();
            $table->time('horaInicioSabadoEstablecimiento') -> nullable();
            $table->time('horaFinSabadoEstablecimiento') -> nullable();
            $table->boolean('domingoEstablecimiento') -> nullable();
            $table->time('horaInicioDomingoEstablecimiento') -> nullable();
            $table->time('horaFinDomingoEstablecimiento') -> nullable();
            
            $table->timestamps();
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
