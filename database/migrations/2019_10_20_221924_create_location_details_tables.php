<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationDetailsTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locations_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('master_location_name');
            $table->tinyinteger('master_location_enabled')->default(1);
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location_name');
            $table->tinyinteger('location_enabled')->default(1);
            $table->unsignedBigInteger('m_location');
            $table->timestamps();
        });

        Schema::create('locations_sub', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_location_name');
            $table->tinyinteger('sub_location_enabled')->default(1);
            $table->unsignedBigInteger('location');
            $table->timestamps();
        });

        Schema::table('locations', function (Blueprint $table) {            
            $table->foreign('m_location')->references('id')->on('locations_master');
        });

        Schema::table('locations_sub', function (Blueprint $table) {            
            $table->foreign('location')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('locations_sub');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('locations_master');
    }
}
