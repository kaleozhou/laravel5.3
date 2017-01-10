<?php

use Illuminate\Database\Seeder;

class AtsortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atsorts')->insert(
            [
                ['parent_id'=>0, 'name'=>'关于我们'],
                ['parent_id'=>0, 'name'=>'业务介绍'],
                ['parent_id'=>0, 'name'=>'信息披露'],
                ['parent_id'=>0, 'name'=>'交易品种'],
                ['parent_id'=>0, 'name'=>'咨讯中心'],
                ['parent_id'=>1, 'name'=>'公司简介'],
                ['parent_id'=>1, 'name'=>'股东背景'],
                ['parent_id'=>1, 'name'=>'企业优势'],
                ['parent_id'=>1, 'name'=>'联系方式'],
                ['parent_id'=>1, 'name'=>'人才招聘'],
                ['parent_id'=>2, 'name'=>'业务流程'],
                ['parent_id'=>2, 'name'=>'开户指引'],
                ['parent_id'=>2, 'name'=>'相关下载'],
                ['parent_id'=>2, 'name'=>'常见问题'],
                ['parent_id'=>2, 'name'=>'法律法规'],

                ['parent_id'=>3, 'name'=>'公告通知'],
                ['parent_id'=>3, 'name'=>'其它公告'],
                ['parent_id'=>3, 'name'=>'会员信息'],

                ['parent_id'=>4, 'name'=>'上市品种'],
                ['parent_id'=>4, 'name'=>'拟上市品种'],
                ['parent_id'=>5, 'name'=>'国际新闻'],
                ['parent_id'=>5, 'name'=>'行业新闻'],
                ['parent_id'=>5, 'name'=>'媒体报道'],
            ]
        );

    }
}
