<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new 
class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('tipodoc');
            $table->string('documento');
            $table->string('nombres');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->date('fecha_nacimiento');
            $table->string('ciudad');
            $table->string('sexo');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('rh');
            $table->string('eps');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('rama');
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
        Schema::dropIfExists('registros');
    }
};
