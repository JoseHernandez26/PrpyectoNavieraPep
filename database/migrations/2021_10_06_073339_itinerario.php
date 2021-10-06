<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Itinerario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Itinerario', function (Blueprint $table) {
            $table->increments ('idItinerario');
            $table->string('CiudadOrigen');
            $table->string('CiudadDestino');
            $table->date('FechaSalida');
            $table->date('FechaLlegada');
            $table->dateTime('HoraSalida');
            $table->dateTime('HoraLlegada');
            $table->integer('DuracionDeViaje');
            $table->unsignedInteger('idEncargadoDeViaje');
            $table->foreign('idEncargadoDeViaje')->references('idEncargadoDeViaje')->on('EncargadoDeViaje');
            $table->unsignedInteger('idRuta');
            $table->foreign('idRuta')->references('idRuta')->on('Ruta');
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
        Schema::dropIfExists('Itinerario');
    }
}
