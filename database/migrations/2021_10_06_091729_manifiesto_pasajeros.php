<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManifiestoPasajeros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ManifiestoPasajeros', function (Blueprint $table) {
            $table->increments ('idManifiestoPasajeros');
            $table->integer('TotalVentas');
            $table->integer('CantidadPasajeros'); 
            $table->integer('CantidadEspaciosLibres'); 
            $table->date('FechaEmision');
            $table->unsignedInteger('idCajero');
            $table->foreign('idCajero')->references('idCajero')->on('Cajero');
          
          
           
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
        Schema::dropIfExists('ManifiestoPasajeros');
    }
}
