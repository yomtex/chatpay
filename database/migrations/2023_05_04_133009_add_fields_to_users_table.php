<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_id')->unique()->after('id');
            $table->string('lastname')->after('name');
            $table->string('phone_number')->after('email');
            $table->string('photo');
            $table->double('balance'); // Credit balance
            $table->string('currency');
            $table->integer('status'); // (0, 1)
            $table->integer('is_vip'); // (0, 1)
            $table->integer('is_verified'); // (0, 1)
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
            //
        });
    }
}
