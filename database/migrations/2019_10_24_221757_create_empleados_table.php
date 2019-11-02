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
            $table->string('primer_nombre_emp')->nullable();
            $table->string('segundo_nombre_emp')->nullable();
            $table->string('primer_apellido_emp')->nullable();
            $table->string('segundo_apellido_emp')->nullable();
            $table->integer('genero_emp')->nullable();
            $table->date('fecha_nacimiento_emp')->nullable();
            $table->integer('estado_civil_emp')->nullable();
            $table->string('direccion_emp')->nullable();
            $table->string('direccion_adicional_emp')->nullable();
            $table->string('telefono_emp')->nullable();
            $table->string('celular_emp')->nullable();
            $table->string('email_emp')->nullable();
            $table->text('comentarios_emp')->nullable();
            $table->text('cv_emp')->nullable();
            $table->text('foto_emp')->nullable();
            $table->unsignedBigInteger('puesto_emp')->nullable();
            $table->unsignedBigInteger('master_location')->nullable();
            $table->unsignedBigInteger('location')->nullable();
            $table->unsignedBigInteger('sub_location')->nullable();
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
