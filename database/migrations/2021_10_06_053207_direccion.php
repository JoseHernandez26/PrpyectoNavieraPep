<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Direccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direccion', function (Blueprint $table) {
            $table->increments ('idDireccion');
            $table->string('Nombre');
            $table->unsignedInteger('idProvincia');
            $table->unsignedInteger('idDistrito');
            $table->unsignedInteger('idCanton');
            $table->unsignedInteger('idBarrio');
            $table->foreign('idCanton')->references('idCanton')->on('Canton');
            $table->foreign('idProvincia')->references('idProvincia')->on('Provincia');
            $table->foreign('idDistrito')->references('idDistrito')->on('Distrito');
            $table->foreign('idBarrio')->references('idBarrio')->on('Barrio');
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
        Schema::dropIfExists('Direccion');
    }
}
