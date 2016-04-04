<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('adress')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->decimal('latitude', 23, 20)->nullable();
            $table->decimal('longitude', 23, 20)->nullable();
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
        Schema::drop('accommodations');
    }
}
