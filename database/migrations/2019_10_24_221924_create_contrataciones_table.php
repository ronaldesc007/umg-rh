<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrataciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('puesto');
            $table->unsignedBigInteger('empleado');
            $table->integer('etapa_cont')->nullable();
            $table->date('fecha_inicio_cont')->nullable();
            $table->date('fecha_fin_cont')->nullable();
            $table->timestamps();
        });

        Schema::table('contrataciones', function (Blueprint $table) {
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
        Schema::dropIfExists('contrataciones');
    }
}
