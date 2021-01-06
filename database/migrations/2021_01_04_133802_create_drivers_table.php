<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nidpassport')->nullable();
            $table->string('np_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('mobile_number')->unique();
            $table->string('city')->nullable();
            $table->string('vehicle_registration')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->text('license_document')->nullable();
            $table->text('image')->nullable();
            $table->string('password')->nullable();
            $table->string('approval')->nullable();
            $table->string('referral_code')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
