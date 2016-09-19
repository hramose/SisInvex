<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pieza', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->string('codigo')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('marca_pieza_id')->unsigned();
            $table->foreign('marca_pieza_id')->references('id')->on('Marca_Pieza')->onDelete('cascade');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('Categoria')->onDelete('cascade');
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
        Schema::drop('Pieza');
    }
}
