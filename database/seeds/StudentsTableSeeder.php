<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
           [
              'name' => 'Sarah Wanjuhi',
              'national_id' => '32471780',
              'email' => 'sarah@gmail.com',
              'date_of_birth' => '20/10/1990',
              'gender' => true,
              'admission_number' => 'CI/00021/010',
              'graduation_id' => '1',
              'room_id' => '1',
              'faculty_id' => '3',
              'hostel_id' => '1',
              'user_id' => '2',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
                'name' => 'Peter Njoroge',
                'national_id' => '35555161',
                'email' => 'peter@gmail.com',
                'date_of_birth' => '09/12/1992',
                'gender' => false,
                'admission_number' => 'MA/00032/012',
                'graduation_id' => '2',
                'room_id' => '2',
                'faculty_id' => '1',
                'hostel_id' => '2',
                'user_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
