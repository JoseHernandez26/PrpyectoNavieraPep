<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservaCarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReservaCarga', function (Blueprint $table) {
            $table->increments ('idReservaCarga');
            $table->integer('PrecioCabina');
            $table->unsignedInteger('idCajero');
            $table->foreign('idCajero')->references('idCajero')->on('Cajero');
            $table->unsignedInteger('idClienteCarga');
            $table->foreign('idClienteCarga')->references('idClienteCarga')->on('ClienteCarga');
          
           
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
        Schema::dropIfExists('ReservaCarga');
    }
}
