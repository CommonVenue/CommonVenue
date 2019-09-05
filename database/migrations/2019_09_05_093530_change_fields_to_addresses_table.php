<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFieldsToAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('street_1');
            $table->dropColumn('street_2');
            $table->string('unit')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('address');
            $table->string('street_1');
            $table->string('street_2');
            $table->dropColumn('unit');
            $table->dropColumn('address_1');
            $table->dropColumn('address_2');
        });
    }
}
