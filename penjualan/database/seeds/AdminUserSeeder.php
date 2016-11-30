<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set Foreign_Key_Checks=0');
        DB::table('admin_users')->truncate();
        DB::table('admin_users')->insert([
          [
          'name'=>"Ahmad Ramdhani",
          'email'=>"ahmad@test.com",
          'password'=>bcrypt('secret'),
          ],
          [
          'name'=>"Ronie",
          'email'=>"ronie@test.com",
          'password'=>bcrypt('secret'),
          ],
          [
          'name'=>"Fauzan",
          'email'=>"fauzan@test.com",
          'password'=>bcrypt('secret'),
          ]

        	]);
    }
}
