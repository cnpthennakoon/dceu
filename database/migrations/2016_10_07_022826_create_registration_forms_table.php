<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {

            //wrong

            $table->increments('id');
            $table->string('name_with_initials');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name_in_english');
            $table->string('nic_no');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->integer('tel_no_home');
            $table->integer('tel_no_mobile');
            $table->string('email');
            $table->string('nationality');
            $table->string('district');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('address_line3');
            $table->string('address_line4');
            $table->integer('postal_code');

            $table->integer('academic_year');
            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('prefered_exam_center');
            $table->string('degree_medium');

            $table->string('al_medium');
            $table->integer('al_exam_year');
            $table->integer('al_index_no');
            $table->string('al_subject1');
            $table->string('al_subject2');
            $table->string('al_subject3');

            $table->string('other_qualifications');
            $table->string('offered_institute');
            $table->string('course_type');
            $table->integer('time_period');
            $table->integer('qualified_year');
            $table->string('qualified_month');
            $table->date('qualified_date');
            $table->string('employee');

            $table->string('qualifications');
            $table->integer('completed_year');
            $table->string('completed_month');
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
        Schema::drop('registration_forms');
    }
}
