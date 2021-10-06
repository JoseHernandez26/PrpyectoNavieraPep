<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reserva', function (Blueprint $table) {
            $table->increments ('idReserva');
            $table->integer('Precio');
            $table->unsignedInteger('idCajero');
            $table->foreign('idCajero')->references('idCajero')->on('Cajero');
            $table->unsignedInteger('idPasajero');
            $table->foreign('idPasajero')->references('idPasajero')->on('Pasajero');
            $table->unsignedInteger('idItinerario');
            $table->foreign('idItinerario')->references('idItinerario')->on('Itinerario');
           
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
        Schema::dropIfExists('Reserva');
    }
}
