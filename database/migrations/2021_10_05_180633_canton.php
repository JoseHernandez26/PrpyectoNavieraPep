<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Canton extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('Canton', function (Blueprint $table) {
            $table->increments ('idCanton');
            $table->string('Nombre');
            $table->unsignedInteger('idProvincia');
            $table->foreign('idProvincia')->references('idProvincia')->on('Provincia');
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
        Schema::dropIfExists('Canton');
    }
}
