<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('user')->insert(['name'=>'Hung', 'email'=>'hung@gmail.com','password'=>bcrypt('123456')],
								['name'=>'Hung2', 'email'=>'hung2@gmail.com','password'=>bcrypt('123456')],
								['name'=>'Hung3', 'email'=>'hung3@gmail.com','password'=>bcrypt('123456')],
								['name'=>'Hung4', 'email'=>'hung4@gmail.com','password'=>bcrypt('123456')],
								['name'=>'Hung5', 'email'=>'hung5@gmail.com','password'=>bcrypt('123456')]
		
		);
    }
}
