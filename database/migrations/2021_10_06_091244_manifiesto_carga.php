<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManifiestoCarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ManifiestoCarga', function (Blueprint $table) {
            $table->increments ('idManifiestoCarga');
            $table->integer('TotalVentas');
            $table->integer('CantidadEspaciosOcupados'); 
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
        Schema::dropIfExists('ManifiestoCarga');
    }
}
