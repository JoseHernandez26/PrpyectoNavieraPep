<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacto', function (Blueprint $table) {
            $table->increments ('idContacto');
            $table->string('Telefono1');
            $table->string('Telefono2');
            $table->string('Correo1');
            $table->string('Correo2');
         
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
        Schema::dropIfExists('Contacto');
    }
}
