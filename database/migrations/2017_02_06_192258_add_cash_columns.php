<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCashColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('transactions',function(Blueprint $table){
           $table->integer('debitAmount');
           $table->integer('creditAmount');
           $table->integer('balance');
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
        Schema::table('transactions',function(Blueprint $table){
           $table->dropColumn('debitAmount','creditAmount','balance');
        });
    }
}
