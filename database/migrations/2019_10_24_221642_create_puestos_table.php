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
            $table->integer('area_puesto');
            $table->unsignedBigInteger('depto_puesto');
            $table->text('descripcion_puesto')->nullable();
            $table->text('funciones_puesto')->nullable();
            $table->text('competencias_puesto')->nullable();
            $table->text('formacion_puesto')->nullable();
            $table->text('experiencia_puesto')->nullable();
            $table->decimal('salario_puesto', 9, 2)->nullable();
            $table->text('comentarios_puesto')->nullable();
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
