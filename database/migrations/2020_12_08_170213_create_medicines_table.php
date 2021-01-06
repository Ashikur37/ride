<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('product_type')->nullable();
            $table->text('name')->nullable();
            $table->text('mobile')->nullable();
            $table->text('address')->nullable();
            $table->text('weight')->nullable();
            $table->text('order_date')->nullable();
            $table->text('order_type')->nullable();
            $table->text('starting_place')->nullable();
            $table->text('order_status')->nullable();
            $table->text('product_id')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('medicines');
    }
}
