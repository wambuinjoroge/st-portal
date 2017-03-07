<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('surname');
            $table->text('first_name');
            $table->text('other_names');
            $table->date('graduation_year');
            $table->text('education_level');
            $table->text('admission_no');
            $table->integer('faculty_name');
            $table->integer('national_id');
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
        Schema::drop('graduations');
    }
}
