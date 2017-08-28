<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
            array(
            	  'name'=>'admin',
            	  ),

            array(
                   'name'=>'student',
            	),
        	));
        DB::table('users')->insert([

            [
              'name'=> 'Christine',           
              'email'=> 'christinenjoroge93@gmail.com',            
              'password'=> bcrypt('nilen'),
              'role_id'=> 1
            ],
            [
              'name'=> 'Sarah',
              'email'=> 'sarah@gmail.com',
              'password'=> bcrypt('CI/00021/010'),
              'role_id'=> 2
            ],
            [
              'name'=> 'Peter',
              'email'=> 'peter@gmail.com',
              'password'=> bcrypt('MA/00032/012'),
              'role_id'=> 2
            ],

            ]);    
          }
}
