<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barrio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Barrio', function (Blueprint $table) {
            $table->increments ('idBarrio');
            $table->string('Nombre');
            $table->unsignedInteger('idProvincia');
            $table->unsignedInteger('idDistrito');
            $table->unsignedInteger('idCanton');
            $table->foreign('idProvincia')->references('idProvincia')->on('Provincia');
            $table->foreign('idDistrito')->references('idDistrito')->on('Distrito');
            $table->foreign('idCanton')->references('idCanton')->on('Canton');
            
        
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
        Schema::dropIfExists('Barrio');
    }
}
