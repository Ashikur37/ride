<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lat1');
            $table->string('lat2');
            $table->string('lon1');
            $table->string('lon2');
            $table->string('mobile');
            $table->integer('bike_id')->default(0);
            $table->double('amount');
            $table->integer('status')->default(0);
            $table->integer('payment_status')->default(0);
            $table->string('payment_method')->nullable();
            $table->string('payment_details')->nullable();

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
        Schema::dropIfExists('bike_trips');
    }
}
