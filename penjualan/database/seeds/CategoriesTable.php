<?php

use Illuminate\Database\Seeder;

class CategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::statement('set Foreign_Key_Checks=0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
        [
        'title'=>'Electronic',
        'slug'=>'electronic'
        ],
        [
        'title'=>'Kendaraan',
        'slug'=>'kendaraan'
        ],
        [
        'title'=>'Oleh-oleh',
        'slug'=>'oleh-oleh'
        ],
        [
        'title'=>'Buku',
        'slug'=>'buku'
        ]
        	]);
    }
}
