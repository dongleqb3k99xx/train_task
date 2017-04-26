<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user_login')->insert([
    		[
    		'user_name'=>'PhongPhan',
    		'pass_word'=>Hash::make('a12345678'),
    		'user_role'=>'admin',
    		'full_name'=> 'Phong Phan',
    		'phone_number'=>'01664653542',
    		'email'=>'cuongpt@gmail.com'
    		
    		],
    		[
    		'user_name'=>'TuanDV2',
    		'pass_word'=>Hash::make('b12345678'),
    		'user_role'=>'member',
    		'full_name'=> 'Tuan DV',
    		'phone_number'=>'01664653542',
    		'email'=>'tuandv@gmail.com'
    		
    		],

    	]);

    }
}
