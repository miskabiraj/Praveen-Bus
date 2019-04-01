<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->integer('driver1_id')->unsigned();
            $table->foreign('driver1_id')->references('id')->on('staff');
            $table->uuid('driver2_id')->nullable();
            $table->string('coach_attends_id')->nullable();
            $table->string('startKm')->nullable();
            $table->string('endKm')->nullable();
            $table->string('totalKm')->nullable();
            $table->string('from_place');
            $table->string('via_route')->nullable();
            $table->string('to_place');
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
        Schema::dropIfExists('trips');
    }
}
