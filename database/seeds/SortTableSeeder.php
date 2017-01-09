<?php

use Illuminate\Database\Seeder;

class SortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sorts')->insert([
            'name' => str_random(10),
            'parent_id' => rand(1,10),
        ]);
    }
}
