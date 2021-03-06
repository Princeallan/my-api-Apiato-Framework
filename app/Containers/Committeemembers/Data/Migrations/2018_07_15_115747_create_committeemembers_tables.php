<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommitteemembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('committeemembers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->unsignedInteger('committee_id');

            $table->foreign('committee_id')->references('id')->on('committees');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('committeemembers');
    }
}
