<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('property_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('payment_id')->nullable();
            $table->date('from_date');
            $table->date('to_date');
            $table->float('total_price', 8, 2);

            $table->foreign('user_id')->references('id')
              ->on('users')->onDelete('cascade')->onUpdate('restrict');
              
            $table->foreign('property_id')->references('id')
              ->on('properties')->onDelete('cascade')->onUpdate('restrict');

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
        Schema::dropIfExists('bookings');
    }
}
