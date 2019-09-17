<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFiledsToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedInteger('category_id');
            $table->integer('capacity')->nullable();
            $table->boolean('adult')->nullable();
            $table->text('message')->nullable();

            $table->foreign('category_id')->references('id')
              ->on('categories')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('capacity');
            $table->dropColumn('adult');
            $table->dropColumn('message');
        });
    }
}
