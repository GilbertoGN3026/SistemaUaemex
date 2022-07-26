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
        Schema::create('computos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nombre_completo');
            $table->string('numero_cuenta');
            $table->bigInteger('servicio_id')->unsigned();
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete("cascade");
            $table->string('numero_eie');
            $table->bigInteger('licenciatura_id')->unsigned();
            $table->foreign('licenciatura_id')->references('id')->on('licenciaturas')->onDelete("cascade");
            $table->bigInteger('usuar_id')->unsigned();
            $table->foreign('usuar_id')->references('id')->on('usuars')->onDelete("cascade");
            $table->string('sugerencias');
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
        Schema::dropIfExists('computos');
    }
};