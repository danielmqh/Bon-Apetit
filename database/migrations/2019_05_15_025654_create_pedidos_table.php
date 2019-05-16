<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantida_pedido');
            $table->dateTime('fecha_pedido');
            
            $table->integer('mesa_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->integer('menu_id')->unsigned();

            $table->timestamps();

            $table->foreign('mesa_id')->references('id')->on('mesas');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
