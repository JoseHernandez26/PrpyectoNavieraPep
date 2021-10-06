<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClienteCarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ClienteCarga', function (Blueprint $table) {
         
            $table->increments ('idClienteCarga');
            $table->unsignedInteger('idCliente');
            $table->foreign('idCliente')->references('idCliente')->on('Cliente');
           
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
        Schema::dropIfExists('ClienteCarga');
    }
}
