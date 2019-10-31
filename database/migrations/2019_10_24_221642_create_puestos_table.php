<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_puesto');
            $table->string('codigo_puesto',10);
            $table->string('area_puesto');
            $table->unsignedBigInteger('depto_puesto');
            $table->text('descripcion_puesto');
            $table->text('funciones_puesto');
            $table->text('competencias_puesto');
            $table->text('formacion_puesto');
            $table->text('experiencia_puesto');
            $table->decimal('salario_puesto', 9, 2);
            $table->text('comentarios_puesto');
            $table->timestamps();
        });

        Schema::table('puestos', function (Blueprint $table) {
            $table->foreign('depto_puesto')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puestos');
    }
}
