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
         $this->call(CategoriesTable::class);
         $this->call(UserTableSeeder::class);
         $this->call(IklanTableSeeder::class);
         $this->call(AdminUserSeeder::class);
         $this->call(CommentTableSeeder::class);
    }
}
