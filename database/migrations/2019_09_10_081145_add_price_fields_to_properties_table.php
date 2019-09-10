<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceFieldsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->integer('min_hours')->nullable();
            $table->integer('cleaning_fee')->default(0);
            $table->integer('capacity')->nullable();
            $table->unsignedInteger('contact_person_id')->nullable();

            $table->foreign('contact_person_id')->references('id')
              ->on('contact_persons')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('adult');
            $table->dropColumn('wifi_name');
            $table->dropColumn('wifi_password');
            $table->dropColumn('location_description');
            $table->dropColumn('canceling_flexible');
        });
    }
}
