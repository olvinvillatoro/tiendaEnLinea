<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->bigIncrements('id_detalle');
            $table->bigInteger('id_producto');
         //   $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->bigInteger('id_proveedor');
           // $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
            $table->integer('precio');
            $table->integer('cantidad');
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
        Schema::dropIfExists('detalle_productos');
    }
}
