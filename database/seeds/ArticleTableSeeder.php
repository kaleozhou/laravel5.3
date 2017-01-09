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
        DB::table('articles')->insert([
            'title' => '中国人民',
            'sort_id' => rand(1,10),
            'full_title' => '中华人民共和国',
            'subhead' => '中华人民共和国',
            'content' => "<a href='nihao'>他打发叫空间打发卡大家看打发卡垃圾啊开发及阿凡达空间打发了空间</a>",
            'author' => '中华人民共和国',
    
        ]);
    }
}
