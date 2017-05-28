<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            [
                'faculty_id' => '1',
                'name' => 'Department of Pure and Applied Sciences',
                'head' => 'Geoffrey Kisia',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faculty_id' => '2',
                'name' => 'Department of Political Science',
                'head' => 'Harriet Ndiru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faculty_id' => '3',
                'name' => 'Department of Computer Science and Technology',
                'head' => 'Pewer Hill',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
