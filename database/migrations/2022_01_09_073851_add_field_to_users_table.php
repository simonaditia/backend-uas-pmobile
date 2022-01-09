<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address')->after('password')->nullable();            
            $table->string('phone')->after('password')->nullable();
            $table->string('status')->after('password')->nullable();
            $table->string('picture', 2048)->after('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voi d
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {            
            $table->dropColumn('address');
            $table->dropColumn('phone');            
            $table->dropColumn('status');
            $table->dropColumn('picture');
        });
    }
}
