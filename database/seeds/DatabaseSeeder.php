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
         $this->call(AtsortTableSeeder::class);
         $this->call(ArticleTableSeeder::class);

    }
}
