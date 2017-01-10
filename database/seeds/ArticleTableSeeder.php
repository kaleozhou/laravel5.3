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
        //添加简介等
        DB::table('articles')->insert([
            [
            'title' => '公司简介',
            'atsort_id' => 6,
            'full_title' => '公司简介',
            'subhead' => '公司简介',
            'content' =>'<div class="text" style="margin-top: 80px;"><p style="text-align: justify;">　　<span style="font-size: 16px;">海南大宗商品交易中心于2012年获海南省政府、省金融办的双重批文批准成立，是海南省推进金融业改革发展“五个一”，由大型国有企业海南省农垦集团联合上海海航易物流有限公司、海南润德投资有限公司、新湖控股有限公司、海南神农大丰种业科技股份有限公司等四家股东共同发起设立的大宗商品现货交易平台，拥有强大的股东背景<span style="text-align: justify;">实力</span>，注册资金达1亿元人民币。<br></span></p><p><br></p><p style="text-align: justify;"><span style="font-size: 16px;">　　海南大宗商品交易中心顺应市场需求，构建了市场服务、资金结算、商品物流、价格发布四大服务网络，拥有强大的技术保障、先进的服务理念、规范的法规法律支持、完善的后线保障、前瞻的行业规划、高效的人员调控、规范的实物交割、全程由多家银行提供三方资金存管、真正确保资金安全，为商品经营企业、消费企业和商品投资者提供功能完备的服务体系。</span></p><p><br></p><p style="text-align: justify;"><span style="font-size: 16px;">　　依托海南大宗商品交易中心强大的<span style="text-align: justify;">实力</span>背景及完善的运营模式</span><span style="font-size: 16px;">，海南大宗商品交易中心国际版块（以下简称“国际版块”）应运而生，国际版块为海南大宗商品交易中心旗下交易市场之一，负责商品挂牌业务的服务与管理，秉承交易中心服务实体经济的经营理念，紧紧围绕交易中心的发展战略目标，本着“公开、公平、公正”原则，通过合规化的经营、规范化的管理、专业化的服务，，组织会员开展多模式、多品种的电子交易，并推动金融保险、信息咨询、商务服务、物流仓储、流通加工等在内的现代服务业的发展。将实现汇集资源、提高流通效率的功能，逐步形成“立足海南、面向全国、辐射东南亚及周边国家和地区”的市场大格局，力争将交易中心打造成为具有国际影响力的交易中心、物流中心、定价中心</span><span style="font-size: 16px;">和信息中心。</span></p><p style="text-indent: 2em;"><span style="text-indent: 32px; font-size: 16px;"><br></span><br></p><p><br></p><p><br></p></div>' ,
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '股东背景',
            'atsort_id' => 7,
            'full_title' => '股东背景',
            'subhead' => '股东背景',
            'content' => '<div class="text" style="margin-top: 80px;"><p><strong><span style="font-family: 宋体, SimSun; font-size: 20px; color: rgb(227, 108, 9);"><strong><span style="color: rgb(151, 72, 6);"></span></strong><strong><span style="color: rgb(151, 72, 6);">▎</span></strong></span><span style="color: rgb(151, 72, 6); font-size: 20px; font-family: 宋体, SimSun;">海南省农垦集团有限公司</span></strong></p><p><br></p><p>　　海南省农垦集团有限公司系海南省政府直属企业，是以天然橡胶、热带现代农业、旅游及旅游地产、金融服务为主导产业企业集团，现有下属企业32家，员工近9万人。农垦集团旗下的海南天然橡胶产业集团股份有限公司的“海南橡胶”股票正式在上海证券交易所挂牌上市，半年后入选四大成份股指数，成为中国上市公司农业板块市值最大的公司。</p><p><br></p><p><br></p><hr style="height:1px;border:none;border-top:1px dashed #974806;"><p><br></p><p><br></p><p><strong><span style="color: rgb(151, 72, 6); font-size: 20px;"><strong style="white-space: normal;"><span style="font-family: 宋体, SimSun; font-size: 20px; color: rgb(227, 108, 9);"><strong><span style="color: rgb(151, 72, 6);">▎</span></strong></span><span style="color: rgb(151, 72, 6); font-size: 20px;"></span></strong></span></strong><strong><span style="color: rgb(151, 72, 6); font-size: 20px; font-family: 宋体, SimSun;">上海海航易物流有限公司</span></strong></p><p><br></p><p>　　上海海航易物流有限公司隶属于海航集团，是中国首家致力于构建海陆空综合物流、物流信息网络及大型制造业一体化的全球物流综合服务运营商，截至2011年年底，上海海航易物流旗下金海重工手持订单量位列世界船企第11位、国内第2位。</p><p><br></p><p><br></p><hr style="height:1px;border:none;border-top:1px dashed #974806;"><p><br></p><p><br></p><p><strong><span style="color: rgb(151, 72, 6); font-size: 20px;"><strong style="white-space: normal;"><span style="font-family: 宋体, SimSun; font-size: 20px; color: rgb(227, 108, 9);"><strong><span style="color: rgb(151, 72, 6);">▎</span></strong></span><span style="color: rgb(151, 72, 6); font-size: 20px;"></span></strong></span></strong><strong><span style="color: rgb(151, 72, 6); font-size: 20px; font-family: 宋体, SimSun;">海南润德投资有限公司</span></strong></p><p><br></p><p>　　海南润德投资有限公司是一家现代化大型投资性企业，是专业从事大宗商品交易的专业机构。公司凝聚了一批在金融领域具有相当丰富的市场分析研究经验及资本运作能力的精英人才，并与国内多家知名交易中心建立了战略伙伴关系。</p><p><br></p><p><br></p><hr style="height:1px;border:none;border-top:1px dashed #974806;"><p><br></p><p><br></p><p><strong><span style="color: rgb(151, 72, 6); font-size: 20px;"><strong style="white-space: normal;"><span style="font-family: 宋体, SimSun; font-size: 20px; color: rgb(227, 108, 9);"><strong><span style="color: rgb(151, 72, 6);">▎</span></strong></span><span style="color: rgb(151, 72, 6); font-size: 20px;"></span></strong></span></strong><strong><span style="color: rgb(151, 72, 6); font-size: 20px; font-family: 宋体, SimSun;">新湖控股有限公司</span></strong></p><p><br></p><p>　　新湖控股有限公司成立于1994年，注册资本为人民币3亿元，企业信用等级连续十年被评定为AAA级。</p><p><br></p><p><br></p><hr style="height:1px;border:none;border-top:1px dashed #974806;"><p><br></p><p><br></p><p><strong><span style="color: rgb(151, 72, 6); font-size: 20px;"><strong style="white-space: normal;"><span style="font-family: 宋体, SimSun; font-size: 20px; color: rgb(227, 108, 9);"><strong><span style="color: rgb(151, 72, 6);">▎</span></strong></span><span style="color: rgb(151, 72, 6); font-size: 20px;"></span></strong></span></strong><strong><span style="color: rgb(151, 72, 6); font-size: 20px; font-family: 宋体, SimSun;">海南神农大丰种业科技股份有限公司</span></strong></p><p><br></p><p>　　海南神农大丰种业科技股份有限公司在深圳证券交易所上市。公司是中国种业骨干企业，杂交水稻技术处于国际领先地位；是我国种子行业的“国家高技术产业化示范基地”；是农业产业化国家重点龙头企业、全国扶贫龙头企业、国家火炬计划重点高新技术企业、海南省高新技术企业、海南省农业化产业重点龙头企业。</p><p><br></p><p><br></p><hr style="height: 1px; border-style: dashed none none; border-top-width: 1px; border-top-color: rgb(151, 72, 6);"></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '企业优势',
            'atsort_id' => 8,
            'full_title' => '企业优势',
            'subhead' => '企业优势',
            'content' => '<div class="text" style="margin-top: 80px;"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161114/58290946003e1.png" title="关于我们（企业优势）_副本.png" alt="关于我们（企业优势）_副本.png"></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '联系方式',
            'atsort_id' => 9,
            'full_title' => '联系方式',
            'subhead' => '联系方式',
            'content' => '<div class="text" style="margin-top: 80px;"><p style="text-align: left;"><img src="../../../../data/upload/ueditor/20160922/57e33d69be03a.jpg" title="联系方式挂牌_官网.jpg" alt="联系方式挂牌_官网.jpg"></p><p style="text-align: left;"><img src="../../../../data/upload/ueditor/20160922/57e33a765ea59.png" title="联系方式_地图_官网.png" alt="联系方式_地图_官网.png"></p><p style="text-align: center;"><br></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '人才招聘',
            'atsort_id' => 10,
            'full_title' => '人才招聘',
            'subhead' => '人才招聘',
            'content' => '<div class="text" style="margin-top: 80px;"><p><br></p><p><span style="font-size: 20px;"><strong>总裁秘书</strong></span></p><p><strong><br></strong></p><p><span style="font-size: 16px;"><strong>岗位职责：</strong></span></p><p><span style="font-size: 16px;">1、按要求组织集团例会/季度经营会/绿化例会（提醒）；<br> 2、撰写会议纪要和会议任务跟进表；<br> 3、配合总裁出席会议，配合社会活动（总裁行程整理和提醒）；<br> 4、对接与集团相关机构（人力、监察等）的文件处理和事务对接；<br> 5、 总裁办的接待，大型接待时协调有关部门配合；<br> 6、清晰汇报工作和协调总裁交办的工作；<br> 7、按培养进度不断提升；<br> 8、整理汇总总裁办档案资料。</span></p><p><span style="font-size: 16px;"><strong><br></strong></span></p><p><span style="font-size: 16px;"><strong>任职资格：</strong><br> 1.表达清晰，有礼貌，懂得商务礼仪。<br> 2.有公文写作能力，相貌端正，气质大方。<br> 3.热爱岗位工作，2年以内工作经验优先，应届毕业生也可考虑。</span></p><p><br></p><p><br></p><p><span style="font-size: 20px;"><strong>风控专员</strong></span></p><p><strong><br></strong></p><p><span style="font-size: 16px;"><strong>岗位职责：</strong></span></p><p><span style="font-size: 16px;">1、协助部门经理建立健全风险控制管理体系；</span></p><p><span style="font-size: 16px;">2、负责客户交易风险的动态监控、测算、评估；</span></p><p><span style="font-size: 16px;">3、按照公司风险管理制度，执行风控工作流程。完成风控日志、风险预算及撰写风控报</span></p><p><span style="font-size: 16px;">告，确保风控工作按规定及时完成；</span></p><p><span style="font-size: 16px;">4、完成其他风控工作。</span></p><p><span style="font-size: 16px;"><strong><br></strong></span></p><p><span style="font-size: 16px;"><strong>任职资格：</strong></span></p><p><span style="font-size: 16px;">1、金融类、经济类相关专业大学本科以上学历，优秀应届毕业生也可；</span></p><p><span style="font-size: 16px;">2、掌握一定的金融、期货、证券知识，了解各商品交易所相关制度、交易规则；</span></p><p><span style="font-size: 16px;">3、具有期货、证券行业相关工作经验，熟悉大宗商品行业者尤佳；</span></p><p><span style="font-size: 16px;">4、较强的责任心及团队合作精神；</span></p><p><span style="font-size: 16px;">5、具有证券从业资格证、期货从业资格证资质者优先；</span></p><p><span style="font-size: 16px;">6、能接受三班倒工作制，夜班值守工作。</span></p><p><span style="font-size: 16px;">7、只限男性。</span></p><p><br></p><p><br></p><p><span style="font-size: 20px;"><strong>交易客服专员</strong></span></p><p><strong><br></strong></p><p><span style="font-size: 16px;"><strong>岗位职责：</strong></span></p><p><span style="font-size: 16px;">1.负责接听会员内线及网上400电话客服分线；</span></p><p><span style="font-size: 16px;">2.负责解答会员端及客户线上、线下开户过程中遇到的问题；根据会员提出的申请，协调解决会员问题；</span></p><p><span style="font-size: 16px;">3.辅助部门负责人负责相关流程、通知的传达与下发；</span></p><p><span style="font-size: 16px;">4.负责投诉的协调处理收集；负责数据的整理分析及上报；</span></p><p><span style="font-size: 16px;">5.收集汇总工作的过程中发现的系统问题以及会员提出的系统问题；</span></p><p><span style="font-size: 16px;">6.交易客服部的紧急救援工作及领导安排的其他工作。</span></p><p><span style="font-size: 16px;"><strong><br></strong></span></p><p><span style="font-size: 16px;"><strong>任职资格：</strong></span></p><p><span style="font-size: 16px;">1.大专以上学历，男女不限，普通话标准流利。较强的信息安全意识。</span></p><p><span style="font-size: 16px;">2.工作责任心强仔细，认真负责，反应机敏，头脑灵活，思路清晰，有较好的沟通能力、协调能力。</span></p><p><span style="font-size: 16px;">3.心理素质好，能承受相应的工作压力，适应晚班，具有突发事件应变能力。</span></p><p><span style="font-size: 16px;">4.有较强的Q沟通和电话沟通能力。</span></p><p><span style="font-size: 16px;">5.认同企业文化，特别要有良好的客户服务意识。</span></p><p><br></p><p><br></p><p><span style="font-size: 20px;"><strong>合规专员</strong></span></p><p><strong><br></strong></p><p><span style="font-size: 16px;"><strong>岗位职责：</strong></span></p><p><span style="font-size: 16px;">1、交易中心内部业务、内部管理制度、宣传材料、通讯稿的合规审查；</span></p><p><span style="font-size: 16px;">2、交易中心对外合同的起草、审核与管理；</span></p><p><span style="font-size: 16px;">3、协助督促各会员单位、交易中心各部门自查各项规章制度是否合规，确保现有规章制度符合交易中心要求。</span></p><p><span style="font-size: 16px;">4、调节并处理涉及交易中心市场参与主体的所有投诉、纠纷；</span></p><p><span style="font-size: 16px;">5、根据合规事项，进行定期检查、专项检查与日常核查，并提出具体整改意见；</span></p><p><span style="font-size: 16px;">6、合规咨询问题解答、会员单位提交材料合规审核。</span></p><p><span style="font-size: 16px;"><strong><br></strong></span></p><p><span style="font-size: 16px;"><strong>任职资格：</strong></span></p><p><span style="font-size: 16px;">1、本科以上学历，法律专业；</span></p><p><span style="font-size: 16px;">2、1年及以上金融相关行业法律相关工作经验；</span></p><p><span style="font-size: 16px;">3、逻辑严谨，书面及语言表达能力强；</span></p><p><span style="font-size: 16px;">4、具有良好的沟通能力，团队合作意识强；</span></p><p><span style="font-size: 16px;">5、适应出差；</span></p><p><span style="font-size: 16px;">6、具有期货从业资格证、法律职业资格证书者优先。</span></p><p><br></p><p><br></p><p><span style="font-size: 20px;"><strong>技术专员</strong></span></p><p><strong><br></strong></p><p><strong>岗位职责：</strong><br> 1、负责项目需求分析，快速准确理解客户的需求，编写需求分析资料；<br> 2、负责技术方案编写，结合客户实际业务、行业特点，为客户提供合理的技术解决方案。</p><p><strong><br></strong></p><p><strong>任职资格：</strong><br> 1. 计算机相关专业本科及以上学历者，具有3年以上IT集成领域的售前技术支持经验，熟悉主流技术与产品；<br> 2. 具有扎实的系统集成、智慧城市等相关领域的基本知识；<br> 3. 能够独立完成IT项目前期方案的设计。<br> 4. 具有良好的沟通能力和方案撰写能力。</p><p><br></p><p><br></p><p><span style="font-size: 20px;"><strong>招商专员</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p><strong><br></strong></p><p><span style="font-size: 16px;"><strong>岗位职责：</strong><br> 1、负责商户开发， 商务洽谈和签约；&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> 2、负责管理当地区域加盟商；<br> 3、负责对区域加盟商进行规范化的培训；<br> 4、负责行业渠道建设，渠道管理和渠道关系维护等工作；<br> 5、负责地区市场状况竞争品牌的信息调研反馈；<br> 6、负责制定当地的市场推广计划及方案。<br> <strong><br></strong></span></p><p><span style="font-size: 16px;"><strong>任职资格：</strong><br> 1、有较强的商务谈判和独立的市场开拓能力；<br> 2、有金融行业渠道开发、招商加盟的经验和资源；<br> 3、有强烈的事业心及挑战精神，良好的个人信誉及职业操守。</span></p><p><span style="font-size: 16px;">&nbsp;</span></p><p><br></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '加盟流程',
            'atsort_id' => 11,
            'full_title' =>'加盟流程' ,
            'subhead' => '加盟流程',
            'content' => '<div class="text"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20160929/57ec682d80faa.jpg" title="未标题-1.jpg" alt="未标题-1.jpg"></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
           // [
           // 'title' => '',
           // 'atsort_id' => 11,
           // 'full_title' =>'' ,
           // 'subhead' => '',
           // 'content' => '',
           // 'author' => 'kaleo',
           // 'created_at' => date("Y/m/d"),
           // 'updated_at' => date("Y/m/d"),
           // ],
        ]);
    
    }
}
