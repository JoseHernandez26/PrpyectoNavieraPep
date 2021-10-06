<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empleado', function (Blueprint $table) {
            $table->increments ('idEmpleado');
            $table->string('Nombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('Cedula');
            $table->string('Nacionalidad');
            $table->integer('Edad');
            $table->unsignedInteger('idDireccion');
            $table->foreign('idDireccion')->references('idDireccion')->on('Direccion');
           
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
        Schema::dropIfExists('Empleado');
    }
}
