<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('rental_booking')){
        Schema::create('rental_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('guest_id')->unsigned();
            $table->bigInteger('property_id')->unsigned();
            $table->foreign('guest_id')->references('id')->on('guests') ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('rental_property') ->onUpdate('cascade')->onDelete('cascade');
            $table->date('rent_start_date');
            $table->date('rent_end_date');
            $table->string('payment_status');
            $table->string('payment_type');
            $table->integer('total_price_paid')->nullable();
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
        Schema::dropIfExists('rental_booking');
    }
}
