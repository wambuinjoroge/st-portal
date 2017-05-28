<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
             'faculty_id' => '1',
             'department_id' => '1',
             'course_code' => 'ASC'
//             'created_at' => Carbon::now()->format('Y-m-d H:i:s')

           ],
           [
             'course_name' => 'Political Science (BA)',
             'faculty_id' => '2',
             'department_id' => '2',
             'course_code' => 'DPS'
//             'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
              'course_name' => 'Computer Technology (Bsc)',
              'faculty_id' => '3',
              'department_id' => '3',
              'course_code' => 'CCT'
//              'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]
        ]);
    }
}
