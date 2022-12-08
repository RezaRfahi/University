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
            $table->foreign('classroom_id')->references('id')->on('class_room');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->string('course_name')->fulltext();
            $table->string('teacher_name')->fulltext();
            $table->date('date');
            $table->time('time');
            $table->string('status')->default('no_run_time');
            $table->string('circumstance')->default('intuitive');
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