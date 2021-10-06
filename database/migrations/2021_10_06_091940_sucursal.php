<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sucursal', function (Blueprint $table) {
            $table->increments ('idSucursal');
            $table->string('Nombre');
            $table->unsignedInteger('idDireccion');
            $table->foreign('idDireccion')->references('idDireccion')->on('Direccion');
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
        Schema::dropIfExists('Sucursal');
    }
}
