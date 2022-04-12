<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->bigInteger('sangre_id')->unsigned();
            $table->string('foto');
            $table->string('telefono');
            $table->string('direccion');
            $table->integer('cp');
            $table->string('latitud');
            $table->string('longitud');
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sangre_id')->references('id')->on('sangre')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donadores');
    }
}
