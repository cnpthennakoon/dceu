<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_registrations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('sinhala_name');
            $table->string('name_initials');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('english_name');
            $table->string('tamil_name');
            $table->date('dob');
            $table->string('nic');
            $table->string('nationality');
            $table->string('gender');
            $table->string('district');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('address4');
            $table->integer('postalcode');
            $table->integer('telhome');
            $table->integer('telmob');
            $table->string('email');

            $table->string('degree');
            $table->integer('batch');
            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('examcenter');
            $table->string('exammedium');

            $table->string('almedium');
            $table->integer('alyear');
            $table->integer('alindexno');
            $table->string('alsubject1');
            $table->string('alsubject2');
            $table->string('alsubject3');

            $table->string('oq');
            $table->string('oqinstitute');
            $table->string('oqcoursetype');
            $table->integer('oqperiod');
            $table->integer('oqquayear');
            $table->string('oqquamonth');
            $table->date('oqquaday');
            $table->string('employee');

            $table->string('quaforrelease');
            $table->integer('quacomyear');
            $table->string('quacommonth');
            $table->integer('status')->nullable();
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
        Schema::drop('new_registrations');
    }
}
