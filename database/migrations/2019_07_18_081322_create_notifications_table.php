<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('comments_id')->unsigned();
            $table->bigInteger('property_id')->unsigned();
            $table->bigInteger('guest_id')->unsigned();
            $table->bigInteger('rental_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('comments_id')->references('id')->on('comments') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('rental_property') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('guest_id')->references('id')->on('guests') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('rental_id')->references('id')->on('rental_booking') ->onUpdate('cascade')->onDelete('cascade');
            $table->String('details');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
