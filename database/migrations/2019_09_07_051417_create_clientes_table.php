<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->bigInteger('id_persona')->unsigned();
            $table->integer('numero_tarjeta')->nullable();
            $table->text('direccion_cliente')->nullable();
            $table->timestamps();

            $table->foreign('id_persona')->references('id_persona')->on('personas');
            //$table->foreign('numero_tarjeta')->references('numero_tarjeta')->on('tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
