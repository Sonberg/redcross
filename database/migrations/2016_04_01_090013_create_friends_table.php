<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('orgin')->nullable();
            $table->string('language')->nullable();
            $table->integer('profession')->unsigned();
            $table->integer('family_members')->nullable();
            $table->string('kids_age')->nullable();
            $table->string('intrests');

            $table->boolean('meet_family');
            $table->string('meet_gender');
            $table->boolean('meet_profession');


            $table->string('adress')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();

            $table->decimal('latitude', 23, 20)->nullable();
            $table->decimal('longitude', 23, 20)->nullable();

            $table->boolean('has_car');
            $table->string('radiues');

            $table->text('notes');
        });

        Schema::table('friends', function($table) {
            $table->foreign('profession')->references('id')->on('professions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('friends');
    }
}
