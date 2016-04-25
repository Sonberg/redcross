<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('friend_match')->unsigned();
            $table->integer('immigrant_match')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('matches', function($table) {
            $table->foreign('friend_match')->references('id')->on('friends')->onDelete('cascade');
            $table->foreign('immigrant_match')->references('id')->on('immigrants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matches');
    }
}
