<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('icono');
            $table->integer('estado');

            $table->integer('usuario_registra')->nullable();
            $table->dateTime('fecha_registra')->nullable();

            $table->integer('usuario_edita')->nullable();
            $table->dateTime('fecha_edita')->nullable();

            $table->integer('usuario_elimina')->nullable();
            $table->dateTime('fecha_elimina')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos');
    }
};
