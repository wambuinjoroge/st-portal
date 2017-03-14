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
             'question' => 'The instructor\'s preparation for class was:',
           ],
           [
             'question' => 'How do you evaluate the instructor\'s punctuality to class?',
           ],
           [
             'question' => 'How do you assess the instructor\'s ability to explain the course content?',
           ],
        ]);
    }
}
