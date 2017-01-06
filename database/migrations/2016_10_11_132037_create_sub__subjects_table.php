<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_subject_code');
            $table->string('sub_subject_name');
            $table->string('subject_id');
            $table->integer('level');
            $table->integer('credit');
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
        Schema::drop('sub__subjects');
    }
}
