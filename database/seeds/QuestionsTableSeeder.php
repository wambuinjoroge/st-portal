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
             'question' => '1. The instructor\'s preparation for class was:',
           ],
           [
             'question' => '2. How do you evaluate the instructor\'s punctuality to class?',
           ],
           [
             'question' => '3. How do you assess the instructor\'s ability to explain the course content?',
           ],
        ]);
    }
}
