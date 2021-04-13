<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->integer('phone_verify')->nullable();
            $table->integer('last_otp')->nullable();
            $table->string('avatar')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('nid')->nullable();

            $table->string('user_main_balance')->nullable();
            $table->string('user_cashback_balance')->nullable();

            $table->string('district')->nullable();
            $table->string('postcode')->nullable();
            $table->string('thana')->nullable();

            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->integer('status')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();

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
}
