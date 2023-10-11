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

            $table->string('nombreCategoria', 100);

            $table->unsignedBigInteger('establecimiento_id');
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos');

            $table->boolean('visible')->nullable();
            $table->string('colorFondoCategoria', 10);
            $table->string('colorFuenteCategoria', 10);
            $table->time('horaInicioCategoria');
            $table->time('horaFinCategoria');
            $table->boolean('lunesCategoria')->nullable();
            $table->boolean('martesCategoria')->nullable();
            $table->boolean('miercolesCategoria')->nullable();
            $table->boolean('juevesCategoria')->nullable();
            $table->boolean('viernesCategoria')->nullable();
            $table->boolean('sabadoCategoria')->nullable();
            $table->boolean('domingoCategoria')->nullable();

            $table->timestamps();
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
