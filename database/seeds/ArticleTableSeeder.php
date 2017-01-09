<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
        DB::table('articles')->insert([
            'title' => '中金岭南'.str_random(6),
            'atsort_id' => rand(6,25),
            'full_title' => '中华人民共和国',
            'subhead' => '中华人民共和国',
            'content' => "<a href='nihao'>他打发叫空间打发卡大家看打发卡垃圾啊开发及阿凡达空间打发了空间</a>",
            'author' => '中华人民共和国',
    
        ]);
        }
    }
}
