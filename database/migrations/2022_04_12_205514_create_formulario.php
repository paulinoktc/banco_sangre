<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('donador_id')->unsigned();
            $table->bigInteger('pregunta_id')->unsigned();
            $table->bigInteger('respuesta_id')->unsigned();
            $table->foreign('donador_id')->references('id')->on('donadores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('respuesta_id')->references('id')->on('respuestas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('formulario');
    }
}
