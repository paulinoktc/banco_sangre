<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hospital_id')->unsigned();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->bigInteger('sangre_id')->unsigned();
            $table->string('foto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nss');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->double('unidades_requeridas');
            $table->string('motivo')->nullable();
            $table->date('fecha_ingreso');
            $table->bigInteger('prioridad_id')->unsigned();
            $table->foreign('hospital_id')->references('id')->on('hospitales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sangre_id')->references('id')->on('sangre')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('prioridad_id')->references('id')->on('prioridades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pacientes');
    }
}
