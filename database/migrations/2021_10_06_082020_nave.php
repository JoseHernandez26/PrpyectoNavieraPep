<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nave', function (Blueprint $table) {
            $table->increments ('idNave');
            $table->integer('CapacidaPasajeros');
            $table->integer('CapacidaEspacioCarga');
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
        Schema::dropIfExists('Nave');
    }
}
