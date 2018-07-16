<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardmembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->unsignedInteger('board_id');
            $table->unsignedInteger('committee_id');

            $table->foreign('committee_id')->references('id')->on('committees');
            $table->foreign('board_id')->references('id')->on('boards');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('boardmembers');
    }
}
