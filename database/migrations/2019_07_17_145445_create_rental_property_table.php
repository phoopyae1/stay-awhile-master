<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('rental_property')){
        Schema::create('rental_property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('host_id')->unsigned();
            $table->foreign('host_id')->references('id')->on('hosts') ->onUpdate('cascade')->onDelete('cascade');
            $table->string('category');
            $table->string('type');
            $table->string('privacy');
            $table->string('setup');
            $table->string('ownership');
            $table->integer('guest_limitation');
            $table->integer('bathroom_count');
            $table->string('bathroom_type');
            $table->string('city');
            $table->string('country');
            $table->integer('street');
            $table->integer('number');
            $table->integer('zip_code')->nullable();
            $table->integer('price_per_month');
            $table->integer('price_per_day');
            $table->integer('rating')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('reports')->nullable();
            $table->boolean('status');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_property');
    }
}
