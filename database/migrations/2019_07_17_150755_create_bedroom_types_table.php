<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBedroomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if(!Schema::hasTable('bedroom_types')){
        Schema::create('bedroom_types', function (Blueprint $table) {
            $table->bigIncrements('bedroom_id');
            $table->bigInteger('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('rental_property') ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('bedroom_count');
            $table->integer('bed_count');
            $table->integer('double_bed_count');
            $table->integer('single_bed_count');
            $table->integer('other_bed_count');
            $table->integer('other_bed_description');
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
        Schema::dropIfExists('bedroom_types');
    }
}
