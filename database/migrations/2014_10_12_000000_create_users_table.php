<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->index()->unsigned()->nullable();
            $table->integer('is_active')->default(0);
            $table->integer('mobile')->nullable();
            $table->string('english_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('level')->nullable();
            $table->integer('student_id')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
