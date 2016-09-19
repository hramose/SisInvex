<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->integer('ano');
            $table->integer('marca_vehiculo_id')->unsigned();
            $table->foreign('marca_vehiculo_id')->references('id')->on('Marca_Vehiculo')->onDelete('cascade');
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
        Schema::drop('Vehiculo');
    }
}
