<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EncargadoDeViaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EncargadoDeViaje', function (Blueprint $table) {
            $table->increments ('idEncargadoDeViaje');
           
            $table->unsignedInteger('idEmpleado');
            $table->foreign('idEmpleado')->references('idEmpleado')->on('Empleado');
           
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
        Schema::dropIfExists('EncargadoDeViaje');
    }
}
