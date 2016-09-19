<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstanteNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estante_Nivel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estante_id')->unsigned();
            $table->foreign('estante_id')->references('id')->on('Estante')->onDelete('cascade');
            $table->integer('nivel_id')->unsigned();
            $table->foreign('nivel_id')->references('id')->on('Nivel')->onDelete('cascade');
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
        Schema::drop('Estante_Nivel');
    }
}
