<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->date('dob');
            $table->string('tagline');
            $table->text('mini_bio');
            $table->text('about');
            $table->string('cosplay_name');
            $table->date('cosplay_since');
            $table->string('twitter');
            $table->string('fb_personal');
            $table->string('fb_cosplay');
            $table->string('fb_photographer');
            $table->string('fb_seller');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
