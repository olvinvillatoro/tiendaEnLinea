<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDetallexcarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallexcarrito', function (Blueprint $table) {
            $table->bigInteger('idCarrito');
            $table->bigInteger('idDetalleProducto');
            $table->bigInteger('cantProducto');
            $table->timestamps();
            $table->foreign('idCarrito')->references('idCarrito')->on('carrito');
            $table->foreign('idDetalleProducto')->references('idDetalleProducto')->on('detallexproducto');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallexcarrito');
    }
}