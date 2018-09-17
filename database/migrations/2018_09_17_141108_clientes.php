<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
        $table->increments('id')->primary();
        $table->string('nombres');
        $table->string('apellidos');
        $table->int('identificacion');
        $table->string('correo')->unique();
        $table->int('telefono');
        $table->string('direccion');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
