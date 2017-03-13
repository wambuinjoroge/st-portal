<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('faculties')->insert([
           [
                 'name' => 'FACULTY OF MATH AND SCIENCES',
                 'head' => 'DR. EVELYN BACH',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
                 'name' => 'FACULTY OF DEVELOPMENT AND STRATEGIC STUDIES',
                 'head' => 'DR. KOKONYA MADA',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
                 'name' => 'FACULTY OF COMPUTING AND INFORMATICS',
                 'head' => 'DR. SYLVESTER mcOYOWO',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
        ]);
    }
}
