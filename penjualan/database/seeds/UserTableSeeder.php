<?php

use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set Foreign_Key_Checks=0');
        DB::table('users')->truncate();
        $users=[];
        for($i=1;$i<=5;$i++){
        	$users[]=[
        	'name'=>"user{$i}",
        	'email'=>"user{$i}@yahoo.com",
        	'password'=>bcrypt("user{$i}"),
        	'slug'=>"user-{$i}"
        	];
        	
        }
        DB::table('users')->insert($users);
    }
}
