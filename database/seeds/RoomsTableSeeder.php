<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('rooms')->insert([
            [
                'random_no' =>'A001',
                'hostel_id'=>1,
                'status' => false
            ],
            [
                'random_no' =>'B001' ,
                'hostel_id'=>2,
                'status' => false
            ],
            [
                'random_no' =>'C001',
                'hostel_id'=>3,
                'status' => false
            ],
            [
                'random_no' =>'D001' ,
                'hostel_id'=>4,
                'status' => false
            ],
            [
                'random_no' =>'A002' ,
                'hostel_id'=>1,
                'status' => false
            ],
            [
                'random_no' =>'B002' ,
                'hostel_id'=>2,
                'status' => false
            ],
            [
                'random_no' =>'C002' ,
                'hostel_id'=>3,
                'status' => false
            ],
            [
                'random_no' =>'D002' ,
                'hostel_id'=>4,
                'status' => false
            ],
            [
                'random_no' =>'A003' ,
                'hostel_id'=>1,
                'status' => false
            ],
            [
                'random_no' =>'B003' ,
                'hostel_id'=>2,
                'status' => false
            ],
            [
                'random_no' =>'C003' ,
                'hostel_id'=>3,
                'status' => false
            ],
            [
                'random_no' =>'D003' ,
                'hostel_id'=>4,
                'status' => false
            ]

        ]);
    }
}
