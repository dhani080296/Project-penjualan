<?php

use Illuminate\Database\Seeder;
use Faker\factory;
use Carbon\Carbon;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('set Foreign_Key_Checks=0');
        DB::table('comments')->truncate();
        $comments=[];
        $faker=Factory::create();
        $date=Carbon::create(2016, 11, 13, 9);
        for($i=1;$i<=5;$i++){
        	$date->addDays(1);
        	$updatedDate=clone($date);
        	$createdDate=clone($date);
        $comments[]=[
        'name'=>$faker->name,
        'email'=>$faker->email,
        'comment'=>$faker->sentence(rand(8,12)),
        'created_at'=>$i < 5 ? $createdDate:(rand(1,0)== 0 ? Null: $createdDate->addDays(4)),
        'updated_at'=>$updatedDate,
        'iklan_id'=>rand(1,10)
        ];
        }
         DB::table('comments')->insert($comments);
    }
}
