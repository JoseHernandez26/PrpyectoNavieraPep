<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Distrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Distrito', function (Blueprint $table) {
            $table->increments ('idDistrito');
            $table->string('Nombre');
            $table->unsignedInteger('idProvincia');
            $table->unsignedInteger('idCanton');
            $table->foreign('idCanton')->references('idCanton')->on('Canton');
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
        Schema::dropIfExists('Distrito');
    }
}
