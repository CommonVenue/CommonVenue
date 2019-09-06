<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->boolean('adult');
            $table->string('wifi_name')->nullable();
            $table->string('wifi_password')->nullable();
            $table->text('location_description')->nullable();
            $table->boolean('canceling_flexible')->default(0);
            $table->string('image')->nullable()->change();
            $table->integer('price')->nullable()->change();
            $table->enum('status',['active','inactive'])->nullable()->change();
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
            $table->string('image');
            $table->integer('price');
            $table->enum('status',['active','inactive']);
        });
    }
}
