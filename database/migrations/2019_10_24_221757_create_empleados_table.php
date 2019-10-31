<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('primer_nombre_emp');
            $table->string('segundo_nombre_emp');
            $table->string('primer_apellido_emp');
            $table->string('segundo_apellido_emp');
            $table->string('genero_emp');
            $table->date('fecha_nacimiento_emp');
            $table->string('estado_civil_emp');
            $table->string('direccion_emp');
            $table->string('direccion_adicional_emp');
            $table->string('telefono_emp');
            $table->string('celular_emp');
            $table->string('email_emp');
            $table->text('comentarios_emp');
            $table->text('cv_emp');
            $table->text('foto_emp');
            $table->unsignedBigInteger('puesto_emp');
            $table->unsignedBigInteger('master_location');
            $table->unsignedBigInteger('location');
            $table->unsignedBigInteger('sub_location');
            $table->timestamps();
        });

        Schema::table('empleados', function (Blueprint $table) {            
            $table->foreign('master_location')->references('id')->on('locations_master');
            $table->foreign('location')->references('id')->on('locations');
            $table->foreign('sub_location')->references('id')->on('locations_sub');
            $table->foreign('puesto_emp')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
