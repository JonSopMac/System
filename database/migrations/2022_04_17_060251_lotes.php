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
        //CREAR TABLA LOTE
        Schema::create('lotes', function (Blueprint $table) {

            $table->engine="InnoDB";//BORRAR DATOS EN CASCADA
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('anio_siembra');
            $table->bigInteger('variedads_id')->unsigned();
            $table->bigInteger('fincas_id')->unsigned();
            $table->timestamps();

            $table->foreign('variedads_id')->references('id')->on('variedads')->onDelete("cascade");
            $table->foreign('fincas_id')->references('id')->on('fincas')->onDelete("cascade");
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
};
