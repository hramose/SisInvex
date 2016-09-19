<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezaVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pieza_Vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pieza_id')->unsigned();
            $table->foreign('pieza_id')->references('id')->on('Pieza')->onDelete('cascade');
            $table->integer('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('Vehiculo')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::drop('Pieza_Vehiculo');
    }
}
