<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->bigInteger('id_persona_encargada')->unsigned();
            $table->longText('nombre_proveedor')->nullable();
            $table->text('correo_proveedor')->nullable();
            $table->longText('contacto_proveedor')->nullable();
            $table->longText('descripcion_proveedor')->nullable();

            $table->timestamps();
            $table->foreign('id_persona_encargada')->references('id_persona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
