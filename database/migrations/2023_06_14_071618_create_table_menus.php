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
        Schema::create('table_cls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombrePlatillo', 100);
            $table->longText('descripcionPlatillo');
            $table->double('precioPlatillo', 8, 2);
            $table->string('imagenPlatillo1', 250);
            $table->string('imagenPlatillo2', 250);
            $table->integer('ordenPlatillo');
            $table->boolean('visiblePlatillo');
            $table->string('colorFondoMenu', 10);
            $table->string('colorFuenteMenu', 10);
            
            $table->unsignedBigInteger('establecimiento_Id');
            $table->foreign('establecimiento_Id')->references('id')->on('establecimientos');
            $table->unsignedBigInteger('categoria_Id');
            $table->foreign('categoria_Id')->references('id')->on('categorias');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cls');
    }
};
