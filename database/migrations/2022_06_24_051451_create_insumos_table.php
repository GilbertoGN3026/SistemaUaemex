<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('user_nombre');
            //llave forane de usuario
            $table->foreign('user_nombre')->references('name')->on('users');
            $table->string('numero_cuenta');
            $table->string('aula');
            $table->string('telefono');
            $table->string('profesor');
            $table->dateTimeTz('fecha_horaSol');
            $table->dateTimeTz('fecha_horaEnt');

            //llave foranea del tipo de insumo
            $table->bigInteger('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete("cascade");
            //llave foranea del numero de insumo
            $table->bigInteger('numero_id')->unsigned();
            $table->foreign('numero_id')->references('id')->on('numeros')->onDelete("cascade");
            //llave foranea de la licenciatura
            $table->bigInteger('licenciatura_id')->unsigned();
            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete("cascade");

            
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
        Schema::dropIfExists('insumos');
    }
};