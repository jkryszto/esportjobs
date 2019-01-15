<?php

use Illuminate\Support\Facades\Schema;
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
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->unsignedInteger('job_type_id');
            $table->unsignedInteger('category_id');
            $table->integer('from');
            $table->integer('to');
            $table->string('currency');
            $table->string('location');
            $table->text('description');
            $table->boolean('verify');
            $table->timestamp('time_to_end')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('job_type_id')
                ->references('id')
                ->on('job_types');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
