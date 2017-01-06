<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsToNewReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_registrations', function (Blueprint $table) {

            $table->integer('al_sub1_result');
            $table->integer('al_sub2_result');
            $table->integer('al_sub3_result');
            $table->integer('al_sub4_result');
            $table->decimal('z_score',5,4);
            $table->integer('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_registrations', function (Blueprint $table) {

            $table->dropColumn('al_sub1_result');
            $table->dropColumn('al_sub2_result');
            $table->dropColumn('al_sub3_result');
            $table->dropColumn('al_sub4_result');
            $table->dropColumn('z_score');
            $table->dropColumn('status');

        });
    }
}
