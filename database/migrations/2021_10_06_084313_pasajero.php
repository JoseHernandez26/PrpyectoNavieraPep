<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pasajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pasajero', function (Blueprint $table) {
         
            $table->increments ('idPasajero');
            $table->unsignedInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('Cliente');
           
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
        Schema::dropIfExists('Pasajero');
    }
}
