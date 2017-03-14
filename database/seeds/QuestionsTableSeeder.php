<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
           [
             'question' => '1',
           ],
           [
             'question' => '2',
           ],
           [
             'question' => '3',
           ]
        ]);
    }
}
