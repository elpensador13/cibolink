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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePlatillo', 100);

            $table->unsignedBigInteger('establecimiento_id');
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos');

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->string('descripcionPlatillo');
            $table->string('precioPlatillo', 8, 2);
            $table->string('imagenPlatillo1', 250);
            $table->string('imagenPlatillo2', 250);
            $table->string('ordenPlatillo', 250);
            $table->boolean('visiblePlatillo')->nullable();
            $table->string('colorFondoMenu', 10);
            $table->string('colorFuenteMenu', 10);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
