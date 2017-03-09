<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
           [
             'course_name' => 'Actuarial Science (BSc)',
             'faculty_id' => '4'
           ],
           [
             'course_name' => 'Political Science (BA)',
             'faculty_id' => '5'
           ],
           [
              'course_name' => 'Computer Technology (Bsc)',
              'faculty_id' => '6'
           ],
        ]);
    }
}
