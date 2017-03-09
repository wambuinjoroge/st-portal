<?php

use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lecturers')->insert([
            [
                'lecturer_name' => ' Paul Lagone' ,
                'gender' => false ,
                'qualification' => 'Masters of Mathematics (MM), Bachelor of Science in Pure Math(BSc)',
                'faculty_id' => '4'
            ],
            [
                'lecturer_name' => ' Kukubo Barasa ' ,
                'gender' => false ,
                'qualification' => 'Masters of Strategic Studies (MSST), Bachelor of Arts in Development Studies (BA)',
                'faculty_id' => '5'
            ],
            [
                'lecturer_name' => ' Jane Wambui' ,
                'gender' => true ,
                'qualification' => 'Masters of Science in Computer Science(MSCS), Bachelor of Science in Computer Science (BSc)',
                'faculty_id' => '6'
            ],
            [
                'lecturer_name' => ' Grace Nyamongo ' ,
                'gender' => true ,
                'qualification' => 'Masters of Mathematics (MM), Bachelor of Science in Actuarial Science (BSc)',
                'faculty_id' => '4'
            ]
        ]);
    }
}
