<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch');
            $table->integer('subject1');
            $table->integer('subject2');
            $table->integer('subject3');
            $table->string('district');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('address4');
            $table->integer('examcenter');
            $table->string('exammedium');
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
        Schema::drop('students');
    }
}
