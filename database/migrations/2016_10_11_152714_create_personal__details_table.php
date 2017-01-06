<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('full_name_sinhala');
            $table->string('name_with_initials');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name_english');
            $table->string('full_name_tamil');
            $table->timestamp('date_of_birth');
            $table->integer('nic');
            $table->string('nationality');
            $table->string('gender');
            $table->string('district');
            $table->integer('address_id');
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
        Schema::drop('personal__details');
    }
}
