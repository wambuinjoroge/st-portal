<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('evaluations',function (Blueprint $table){
           $table->increments('id');
           $table->integer('faculty_name');
           $table->text('course_name');
           $table->text('year');
           $table->boolean('st_gender');
           $table->text('lecturer_name');
           $table->boolean('lec_gender');
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
        //
        Schema::drop('evaluations');
    }
}
