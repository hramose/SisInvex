<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_ingreso');
            $table->integer('unidades_iniciales');
            $table->integer('unidades_actuales');
            $table->text('descripcion')->nullable();
            $table->integer('detalle_pedido_id')->unsigned();
            $table->foreign('detalle_pedido_id')->references('id')->on('Detalle_Pedido')->onDelete('cascade');
            $table->integer('estante_nivel_id')->unsigned();
            $table->foreign('estante_nivel_id')->references('id')->on('Estante_Nivel')->onDelete('cascade');
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
        Schema::drop('Inventario');
    }
}
