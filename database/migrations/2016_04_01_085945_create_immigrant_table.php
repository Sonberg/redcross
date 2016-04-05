<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmigrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immigrants', function (Blueprint $table) {
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
            $table->date('arrived')->nullable();
            $table->integer('accommodation')->unsigned();
            
            $table->integer('family_members')->nullable();
            $table->string('kids_age')->nullable();
            $table->string('interests');
            
            $table->boolean('meet_family');
            $table->string('meet_gender');
            $table->boolean('meet_profession');
        });
        
        Schema::table('immigrants', function($table) {
            $table->foreign('profession')->references('id')->on('professions')->onDelete('cascade');
            $table->foreign('accommodation')->references('id')->on('accommodations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('immigrants');
    }
}
