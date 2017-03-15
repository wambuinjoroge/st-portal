<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('units')->insert([
           [
              'name' => 'Applied Statistics 101',
              'faculty_id' => 1,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ],
           [
              'name' => 'Descriptive Statistics 103',
              'faculty_id' => 1,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ],
           [
              'name' => 'Introduction to International Relations 101',
              'faculty_id' => 2,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ],
           [
              'name' => 'Introduction to Development Studies 103',
              'faculty_id' =>2,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ],
           [
              'name' => 'Discrete Structures 101',
              'faculty_id' =>3,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ],
           [
              'name' => 'Introduction to Programming 101',
              'faculty_id' =>3,
              'created_at' => Carbon\Carbon::now()->format('Y-m-d) H:i:s')
           ]
        ]);
    }
}
