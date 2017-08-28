<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
         $this->call(RoomsTableSeeder::class);
         $this->call(LecturersTableSeeder::class);
         $this->call(CoursesTableSeeder::class);
         $this->call(FacultiesTableSeeder::class);
         $this->call(HostelsTableSeeder::class);
         $this->call(StudentsTableSeeder::class);
         $this->call(QuestionsTableSeeder::class);
         $this->call(AnswersTableSeeder::class);
         $this->call(UnitsTableSeeder::class);
         $this->call(DepartmentsTableSeeder::class);


    }
}
