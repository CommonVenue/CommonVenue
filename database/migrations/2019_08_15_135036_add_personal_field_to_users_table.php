<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonalFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('industry')->nullable();
            $table->string('job_title')->nullable();
            $table->string('organization')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name')->nullable();
            $table->dropColumn('last_name')->nullable();
            $table->dropColumn('avatar')->nullable();
            $table->dropColumn('description')->nullable();
            $table->dropColumn('country')->nullable();
            $table->dropColumn('postal_code')->nullable();
            $table->dropColumn('industry')->nullable();
            $table->dropColumn('job_title')->nullable();
            $table->dropColumn('organization')->nullable();
            $table->string('name');
        });
    }
}
