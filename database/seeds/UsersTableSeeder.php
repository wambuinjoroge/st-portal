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
              'name'=> 'Christine',           
              'email'=> 'christinenjoroge@gmail.com',            
              'password'=> bcrypt('nilee'),
               'role_id'=> 1, 
            ]);
            
                
            
    }
}
