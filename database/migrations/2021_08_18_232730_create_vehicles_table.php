<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('models');
            $table->bigInteger('engine_id')->unsigned();
            $table->foreign('engine_id')->references('id')->on('engines');
            $table->bigInteger('transmission_id')->unsigned();
            $table->foreign('transmission_id')->references('id')->on('transmissions');
            $table->bigInteger('drive_id')->unsigned();
            $table->foreign('drive_id')->references('id')->on('drives');
            $table->bigInteger('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colors');
            $table->string('engine_volume_value', 55);
            $table->foreign('engine_volume_value')->references('value')->on('engine_volumes');
            $table->integer('power');
            $table->bigInteger('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores');
            $table->integer('price');
            $table->bigInteger('discount_id')->unsigned();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->year('year');
            $table->integer('editable')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
