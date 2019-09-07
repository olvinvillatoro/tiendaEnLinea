<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id_persona');
            $table->bigInteger('id')->unsigned();
            $table->timestamps();
            $table->string('nombre_persona');
            $table->string('apellido_persona');
            $table->string('correo_persona');
            $table->string('telefono_persona');
            $table->date('fechanac_persona')->nullable();

            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
