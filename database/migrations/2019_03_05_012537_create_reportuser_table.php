<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportuser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reported_by_id')->unsigned();
            $table->integer('reported_user_id')->unsigned();
            $table->text('report_description')->nullable();
            $table->foreign('reported_by_id')->references('id')->on('users');
            $table->foreign('reported_user_id')->references('id')->on('users');
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
        Schema::drop('reportuser');
    }
}
