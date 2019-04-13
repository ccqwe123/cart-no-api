<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('job_description');
            $table->string('job_requirements');
            $table->string('company_name')->nullable();
            $table->string('experience')->nullable();
            $table->string('province');
            $table->string('state');
            $table->string('specializations');
            $table->decimal('salary', 18, 4)->nullable();
            $table->softDeletes();
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
        Schema::drop('jobs');
    }
}
