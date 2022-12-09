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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->fulltext();
            $table->string('email')->unique()->fulltext();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('building_id');
            $table->foreign('building_id')->references('id')->on('buildings')
                ->onDelete('cascade');
            $table->string('phone_number', '13')->nullable()->fulltext();
            $table->rememberToken();
//            $table->foreignId('current_team_id')->nullable();
            $table->string('position')->default('clerk');
            $table->string('level')->default('reader');
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
