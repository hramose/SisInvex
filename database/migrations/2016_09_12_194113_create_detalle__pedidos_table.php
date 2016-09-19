<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detalle_Pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('Pedido')->onDelete('cascade');            
            $table->integer('pieza_id')->unsigned();
            $table->foreign('pieza_id')->references('id')->on('Pieza')->onDelete('cascade');
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
        Schema::drop('Detalle_Pedido');
    }
}
