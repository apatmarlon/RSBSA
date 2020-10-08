<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmparcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmparcels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farmland_id');
            $table->string('cropcommo');
            $table->integer('size');
            $table->integer('headno');
            $table->string('farm_type');
            $table->string('orgaprac');
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
        Schema::dropIfExists('farmparcels');
    }
}
