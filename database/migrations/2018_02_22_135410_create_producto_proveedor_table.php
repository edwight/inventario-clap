<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detalle_id');
            $table->integer('producto_id');
            $table->integer('proveedor_id');
            $table->integer('user_id');
            //$table->boolean('estado');//salida = 0 entrada 1

            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_salida');
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
        Schema::dropIfExists('entrada_producto');
    }
}
