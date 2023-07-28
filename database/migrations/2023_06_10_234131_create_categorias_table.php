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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreCategoria', 100);
            $table->boolean('visible');
            $table->string('colorFondoCategoria', 10);
            $table->string('colorFuenteCategoria', 10);
            $table->time('horaInicioCategoria');
            $table->time('horaFinCategoria');
            $table->boolean('lunesCategoria');
            $table->boolean('martesCategoria');
            $table->boolean('miercolesCategoria');
            $table->boolean('juevesCategoria');
            $table->boolean('viernesCategoria');
            $table->boolean('sabadoCategoria');
            $table->boolean('domingoCategoria');
            
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
