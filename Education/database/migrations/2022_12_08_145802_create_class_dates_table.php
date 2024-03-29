<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_dates', function (Blueprint $table) {
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->string('classroom_name')->fulltext();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->string('course_name')->fulltext();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('teacher_name')->fulltext();
            $table->date('date');
            $table->time('start_time');
            $table->time('finish_time');
            $table->string('status')->default('no_run_time');
            $table->string('circumstance')->default('intuitive');
            $table->unique(['classroom_id', 'date', 'start_time']);
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
        Schema::dropIfExists('class_dates');
    }
};
