<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('puesto');
            $table->unsignedBigInteger('empleado');
            $table->integer('razon_ope')->nullable();
            $table->integer('monto_ope')->nullable();
            $table->timestamps();
        });

        Schema::table('operaciones', function (Blueprint $table) {
            $table->foreign('puesto')->references('id')->on('puestos');
            $table->foreign('empleado')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operaciones');
    }
}
