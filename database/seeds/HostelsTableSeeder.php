<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class HostelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hostels')->insert([
           [
               'hostel_name' => 'Institute',
               'hostel_head' => 'Ms Redempta Asum',
               'rooms_number' => '50',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'hostel_name' => 'Kilimanjaro Flats',
               'hostel_head' => 'Daniel Long',
               'rooms_number' => '100',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
               'hostel_name' => 'Elgon',
               'hostel_head' => 'Komba Nile ',
               'rooms_number' => '60',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
        ]);
    }
}
