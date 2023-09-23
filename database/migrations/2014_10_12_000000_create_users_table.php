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
            $table->bigIncrements('id');
            $table->string('photo')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('DOB');
            $table->string('email');
            $table->string('phone_number');
            $table->string('password');
            $table->string('city');
            $table->string('country');
            $table->integer('rating')->nullable();
            $table->string('status')->nullable();
            $table->string('nrc_num');
            $table->integer('reports')->nullable();
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
