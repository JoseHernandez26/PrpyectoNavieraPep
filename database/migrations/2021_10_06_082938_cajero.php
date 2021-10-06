<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cajero', function (Blueprint $table) {
            $table->increments ('idCajero');
            $table->unsignedInteger('idEmpleado');
            $table->foreign('idEmpleado')->references('idEmpleado')->on('Empleado');
            $table->unsignedInteger('idUsuario');
            $table->foreign('idUsuario')->references('idUsuario')->on('Usuario');
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
        Schema::dropIfExists('Cajero');
    }
}
