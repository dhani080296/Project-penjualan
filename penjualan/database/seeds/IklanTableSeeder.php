<?php

use Illuminate\Database\Seeder;
use Faker\factory;
use Carbon\Carbon;
class IklanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iklans')->truncate();
        $iklans=[];
        $faker=Factory::create();
        $date=Carbon::create(2016, 11, 13, 9);
        for($i=1;$i<=10;$i++){
        	$date->addDays(1);
        	$publishedDate=clone($date);
        	$createdDate=clone($date);
        	$image="Post_image_".rand(1,5).".jpg";
        	$bbm=rand(10,89)."CDCEEA";
        $iklans[]=[
        'user_id'=>rand(1,5),
        'title'=>$faker->sentence(rand(8,12)),
        'slug'=>$faker->slug(),
        'body'=>$faker->paragraphs(rand(10,15),true),
        'phone'=>$faker->e164PhoneNumber(),
        'bbm'=>$bbm,
        'address'=>"{$faker->streetName} {$faker->postcode} {$faker->city}",
        'image'=>rand(0,1)== 1 ? $image:null,
        'created_at'=>$createdDate,
        'updated_at'=>$createdDate,
        'published_at'=>$i < 5 ? $publishedDate:(rand(1,0)== 0 ? Null: $publishedDate->addDays(4)),
        'price'=>rand(1000000,5000000),
        'category_id'=>rand(1,4),
         'view_count'=>rand(1,10)*10 

        ];
        }
        DB::table('iklans')->insert($iklans);
    }
}
