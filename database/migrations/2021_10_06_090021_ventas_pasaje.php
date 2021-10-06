<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentasPasaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VentasPasaje', function (Blueprint $table) {
            $table->increments ('idVentasPasaje');
           
            $table->unsignedInteger('idReserva');
            $table->foreign('idReserva')->references('idReserva')->on('Reserva');
           
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
        Schema::dropIfExists('VentasPasaje');
    }
}
