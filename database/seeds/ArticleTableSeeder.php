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
            [
            'title' => '手机交易软件(IOS版)火爆上线！',
            'atsort_id' => 21,
            'full_title' =>'手机交易软件(IOS版)火爆上线！' ,
            'subhead' => '手机交易软件(IOS版)火爆上线！',
            'content' => '<div class="text"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161220/5859014f0fe74.jpg" title="手机软件微信版苹果端_副本.jpg" alt="手机软件微信版苹果端_副本.jpg"></p><p>　</p><p>　　2016年12月20日，海南大宗商品交易中心国际版块（“国际版块”）手机交易软件(IOS版)火爆上线，满足广大客户多元化的需求，实现一体化服务。</p><p><br></p><p>　　国际版块通过精心研发的手机交易软件，集开户、交易、行情、出入金模块于一体，全面完善线上线下渠道建设，打造PC端和移动端多平台全方位的开户体验，让您足不出户，轻松实现交易。</p><p><br></p><p>　　<strong>国际版块</strong></p><p>　　苹果手机客户端示意图</p><hr><p style="text-align: justify;"><br></p><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161220/585903711f298.png" title="QQ截图20161220180816_副本.png" alt="QQ截图20161220180816_副本.png">　　</p><p><br></p><p>　　国际版块手机交易软件Android版与IOS版的相继推出，旨在为广大客户提供操作便捷、安全、高效的交易平台，实现一站式的金融服务。我们将持续不断努力完善各项功能，为广大客户带来更多的便利和更优的交易体验。</p><p><br></p><p>　　<strong>手机交易软件(IOS版)下载方式：</strong></p><p><br></p><hr><p><br></p><p>　　1.通过苹果手机Appstore搜索“HCE挂牌”下载安装即可；</p><p>　　2.在微信公众号主页面菜单关于我们→下载专区进行下载安装；</p><p>　　3.扫描下方二维码，可立即下载安装。</p><p><br></p><p><br></p><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161220/585905e95861f.png" title="iphone.png" alt="iphone.png"></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '行情分析系统正式上线',
            'atsort_id' => 21,
            'full_title' =>'行情分析系统正式上线' ,
            'subhead' => '行情分析系统正式上线',
            'content' => '<div class="text"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161214/5850a9d567a43.jpg" title="建行上线微信版海报_副本.jpg" alt="建行上线微信版海报_副本.jpg"></p><p><br></p><p>　　为了方便广大客户更好的参与市场交易，满足多样化的投资需求，海南大宗商品交易中心国际版块（以下简称“国际版块”）对行情分析系统软件相关功能进行全方位完善，行情分析系统由深圳市点证科技有限公司定制研发。目前上线准备工作已全部完成，即日起，国际版块行情分析系统正式上线。广大客户可通过海南大宗商品交易中心国际版块官方网站下载专区点击下载。</p><p><br></p><p>　　国际版块行情分析系统的上线旨在为广大客户提供更为优质全面的服务，营造高效便捷的交易环境。PC端行情分析系统支持多周期同列与多合约同列，以便投资者更加直观地分析行情变化。多周期同列可以让客户同时看到同一产品日线、周线、月线、5分钟线等多个K线画面组合，多合约同列可以让投资者同时看到多个产品的K线组合画面。系统中汇聚了全球指数、实时汇率与行情数据、世界各大交易场所实时行情指数，为客户提供全方位的国内外行情，证券期货行情、全球指数、国际财经日历、全球财经资讯等服务，信息丰富全面，满足广大客户随时随地的交易需求。</p><p><br></p><p>　　<strong>国际版块行情分析系统下载方式：</strong></p><p>　　登录海南大宗商品交易中心国际版块官网：www.hncecgj.com，在首页快速下载通道“下载中心”进入下载软件页面，选择“行情分析系统”点击下载，按提示安装。</p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '热烈祝贺国际版块迎来0017号经纪会员',
            'atsort_id' => 21,
            'full_title' =>'热烈祝贺国际版块迎来0017号经纪会员' ,
            'subhead' => '热烈祝贺国际版块迎来0017号经纪会员',
            'content' => '<div class="text"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161216/5853da2d17886.png" title="0017大.png" alt="0017大.png"></p><p>　　</p><p>　　12月16日，海南大宗商品交易中心国际版块（以下简称“国际版块”）正式迎来0017号经纪会员，并已激活上线试运营。</p><p><br></p><p>　　0017号经纪会员单位张总表示十分憧憬双方合作地展开，今后将以交易中心的平台为依托，为交易商提供优质的服务。国际版块总经理欧新枫表示，交易中心将对会员单位实行严格的监督，共同促进大宗商品市场良性发展。与此同时，也将为会员单位提供全面的培训服务，加强更深层次的合作。</p><p><br></p><p>　　0017号经纪会员单位，是一家大型综合性金融服务机构，涉及大宗商品行业多个领域，现已形成以实业投资、金融投资和咨询服务为主体，致力为中国地区广大交易商提供多样化的优质服务。</p><p><br></p><p>　　双方相信，通过此次专业与真诚的合作，携手共同发展，强强联合、互惠互利，为打造双赢的局面奠定基础。</p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '热烈祝贺国际版块迎来0008号经纪会员',
            'atsort_id' => 21,
            'full_title' =>'热烈祝贺国际版块迎来0008号经纪会员' ,
            'subhead' => '热烈祝贺国际版块迎来0008号经纪会员',
            'content' => '<div class="text"><p style="text-align: center;"><img src="../../../../data/upload/ueditor/20161209/584a5e6b33b4a.jpg" title="03_副本_副本.jpg" alt="03_副本_副本.jpg"></p><p>　　</p><p>　　12月7日，海南大宗商品交易中心国际版块（以下简称“国际版块”）正式迎来0008号经纪会员，并已激活上线试运营。</p><p><br></p><p>　　0008号经纪会员单位负责人林总表示对海南大宗商品交易中心深度认可，交易中心拥有省级政府、省金融办批文，成立运营多年，在现货交易领域里有着强大的团队力量和技术支持；依托海南大宗商品交易中心强大的背景实力及完善的运营模式，打造良好的运营团队，为交易商提供更优质、专业的服务。</p><p><br></p><p>　　0008号经纪会员单位是一家专业从事大宗商品的投资服务公司，公司汇聚了国内大宗商品投资行业的精英，组成专业化的风险管理、渠道管理和服务团队，为交易商提供全面的大宗商品交易业务。管理团队拥有多年企业管理、大宗商品投资运营经验和广阔的社会资源，竭诚为合作伙伴和交易商提供诚信、优质、专业的商品买卖服务和金融投资顾问服务，致力为中国大宗商品投资市场繁荣发展贡献力量。</p><p><br></p><p>　　双方相信，通过此次专业与真诚的合作，携手共同发展，强强联合、互惠互利，为打造双赢的局面奠定基础。</p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '德国欲在亚投行高调行事 协调欧洲对接"一带一路"',
            'atsort_id' => 22,
            'full_title' =>'德国欲在亚投行高调行事 协调欧洲对接"一带一路"' ,
            'subhead' => '德国欲在亚投行高调行事 协调欧洲对接"一带一路"',
            'content' => '<div class="text"><p style="text-indent: 2em;">参考消息网12月19日报道 日本《外交学者》网站12月17日刊登题为《德国希望欧洲帮助引导中国的“一带一路”倡议》一文，作者为德国墨卡托中国研究中心研究员扬·加斯珀斯。文章称，在德国民众的印象中，古代的“丝绸之路”有很多积极的内涵。但北京正计划打造的这条著名路线的现代版，却让中国在欧洲最大的贸易伙伴国德国内部出现了各种不同的反应。</p><p><br></p><p style="text-indent: 2em;">德国的很多贸易中心希望通过扩大与“一带一路”倡议海上和陆上路线的联系，获得新的商业机会。举例而言，德国最大的港口汉堡港和最大的内陆港杜伊斯堡港已表示有意成为“一带一路”倡议的中心，以吸引更多东亚及全球海上贸易量。不过，据称汉堡港也在制定战略以应对大量南欧国家港口的激烈竞争，因为中国谋求将南欧国家港口打造成“一带一路”倡议的海上大门。</p><p><br></p><p style="text-indent: 2em;">德国总理默克尔已对“一带一路”倡议表示欢迎，并将此作为获得中国对欧洲及其周边地区更多投资的一种手段。但柏林也对该计划存在担忧，因为它有可能打乱欧盟的投资规则，并使欧盟成员国因争夺中方投资而损害政治团结。</p><p><br></p><p style="text-indent: 2em;">鉴于各方对“一带一路”倡议带来的地缘政治影响和经济可持续性普遍存有疑虑，德国政府已在积极尝试通过欧盟、欧安组织及二十国集团协调欧洲各国对该计划的反应及参与方式。柏林已准备发挥作用——不仅因为德国是欧洲最大的经济体，而且还因为不同于中欧、东欧和南欧一些国家，它的经济情况并不取决于吸引中国对其基础设施进行投资。</p><p><br></p><p style="text-indent: 2em;">文章称，在布鲁塞尔，德国主张通过欧盟-中国互联互通平台，确保与“一带一路”倡议相关的中国对欧投资符合欧盟的要求和标准。德国官员还将该平台视为双方共同设计欧中新经济走廊的工具之一。德国支持欧洲投资银行向亚投行提供技术支持以及向与“一带一路”倡议相关的亚投行项目投入资金。德国决定在亚投行高调行事，其中包括以间接的方式积极引导中国在欧亚大陆的“一带一路”倡议行动。</p><p><br></p><p style="text-indent: 2em;">德国还谋求增加与中国的对话合作机会。围绕如何最有效地将欧亚大陆现有联系与“一带一路”倡议进行对接的问题，德国利用其2016年欧安组织轮值主席国的身份，在多边层面推动讨论活动。今年5月，德国外交部还就这一问题在柏林举行欧安组织会议，此次会议吸引了该组织全部成员国以及中国的高级别代表参与。德国已将欧亚大陆与中国的互联互通合作锁定为欧安组织未来几年的议程内容。</p><p><br></p><p style="text-indent: 2em;">德国外交部及其他政府部门还谋求与北京展开更多的双边对话。举例来说，德国外交部几名高级官员通过今年11月在北京举行的慕尼黑安全会议核心小组会议，与中方高级官员讨论了“一带一路”倡议的经济与地缘政治影响。</p><p><br></p><p style="text-indent: 2em;">文章称，未来几年，德国对“一带一路”倡议的策略仍将主要是关注该计划的地缘政治影响，并确保中国在欧亚大陆的这个雄心勃勃计划的经济可持续性。但北京能否欣然接受德国的这些做法，仍有待观察。</p><p><br></p><p style="text-align: right;"><span style="color: rgb(165, 165, 165);">（本文来源参考消息网）</span></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '全球经济在不确定性中前行',
            'atsort_id' => 22,
            'full_title' =>'全球经济在不确定性中前行' ,
            'subhead' => '全球经济在不确定性中前行',
            'content' => '<div class="text"><p>　　美联储主席耶伦在谈到货币政策走向时，总离不开一个判断标准，就是经济数据的好坏。事实上，要洞见未来主要央行的货币政策走向，也离不开对全球经济未来趋势的判断。明年全球经济会向哪里走？</p><p><br></p><p>　　2016年是“黑天鹅”事件频发的年份，尤其是欧美成为“黑天鹅”翩翩起舞之地。英国脱欧公投让许多分析人士大跌眼镜，特朗普在美国大选中获胜也同样出人意料，直到最后一刻才将谜底揭晓。除了这两起最大的“黑天鹅”事件外，意大利公投又在欧洲上空上演了同样一幕。梳理今年美联储货币政策的曲折决策过程，很难抹去这些事件给决策带来的影响。</p><p><br></p><p>　　许多智库和官方人士认为，明年全球经济仍然充满着不确定性。虽然难再有英美这么大的事件发生，但脱欧公投和美国大选的影响很可能在明年以各种方式展开。国际货币基金组织（IMF）前副总裁朱民认为，2017年全球经济仍将低位运行，金融市场和全球经济增长波动毋庸置疑将会进一步加大。</p><p><br></p><p>　　2016年，全球经济仍然维持了温和增长势头，但是整体看来，全球经济增长比预期低，仍处于低位。IMF在10月份的《世界经济展望》报告中，预计世界经济今年将增长3.1%，明年在包括俄罗斯和巴西在内的主要新兴市场国家实现复苏的支持下，全球增长将加快到3.4%，但较今年4月时的预测均下调了0.1个百分点。</p><p><br></p><p>　　经合组织虽然将今年全球经济增速从去年的3.1%降至2.9%，但对未来经济活动的评估较乐观。该组织认为，根据领先指标，许多大型发展中国家以及英国和法国都呈现增长加速的迹象。这些迹象表明，2017年全球经济将出现适度反弹，改变今年增长乏力的态势。</p><p><br></p><p>　　指标显示，美国经济已经进入上升轨道。如果美国新一届政府采取太多刺激经济的措施，经济过热的风险就可能加大。欧元区经济复苏势头仍在持续，欧元区11月采购经理人指数达到今年最高的54.1，显示欧元区经济可能在第四季度继续加速增长。欧盟委员会预估报告称，今年欧元区将有19国国内生产总值增长水平达到1.7%，已恢复到国际金融危机前的水平。欧元区通胀率下半年稳中有升，但仍距2%的通胀目标有明显差距。日本近期数据却略显一丝亮光，民间消费呈小幅攀升，日本企业11月订单增加，12月大型制造业景气判断指数为正10，创下2015年12月以来最高水准。对于新兴经济体，高盛的一份报告预期，明年增长会有所加快。</p><p><br></p><p>　　尽管经济有好转迹象，许多分析对经济增速的反弹力度仍然存疑。如前所述，明年特朗普正式执政后采取哪些政策措施、美联储加息对资本流动的冲击、英国脱欧谈判前景、欧洲各国大选等潜在的政治风险、逆全球化思潮的发展对贸易和投资的干扰等，都可能制约全球经济加速的力度。如果有突发事件发生，将导致决策环境进一步复杂化。</p><p><br></p><p style="text-align: right;"><span style="color: rgb(165, 165, 165);">（本文来源中国经济网）</span></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
            [
            'title' => '欧洲央行“一加一减”为哪般',
            'atsort_id' => 22,
            'full_title' =>'欧洲央行“一加一减”为哪般' ,
            'subhead' => '　　近日，欧洲央行在今年最后一次货币政策会议上宣布将继续维持零利率，同时在购债计划上采取“一加一减”做法：一是将原定于明年3月份到期的购债计划延长至明年12月份；二是自明年4月份起将当前的月资产购买规模缩减至600亿欧元。欧洲央行行长德拉吉在会后的表态颇有折中之意，从侧面反映了欧洲央行面对当前错综复杂形势的纠结心态。',
            'content' => '<div class="text"><p>　　近日，欧洲央行在今年最后一次货币政策会议上宣布将继续维持零利率，同时在购债计划上采取“一加一减”做法：一是将原定于明年3月份到期的购债计划延长至明年12月份；二是自明年4月份起将当前的月资产购买规模缩减至600亿欧元。欧洲央行行长德拉吉在会后的表态颇有折中之意，从侧面反映了欧洲央行面对当前错综复杂形势的纠结心态。</p><p><br></p><p>　　此间业界分析认为，欧洲央行的这一决定向投资者表明，2017年的欧元区市场依然是“希望与挑战”并存，“希望”已经看见，但“挑战”尚难预估。</p><p><br></p><p>　　今年以来欧元区经济复苏势头良好。根据英国市场研究机构马基特集团的数据，11月份欧元区综合采购经理人指数（PMI）初值较10月份上升了0.8，达到了今年最高水平54.1，显示欧元区经济极有可能在今年四季度继续加速增长。根据欧盟委员会预估报告，今年欧元区将有19国GDP增长水平达到1.7%，已经恢复到国际金融危机前的水平。此外，欧元区通胀率在经历了年初的颓势后，下半年稳中有升，虽距2%的通胀目标仍有明显差距，但却进一步向市场释放了经济扩张信号。</p><p><br></p><p>　　德拉吉在会后坦言，此次会议并未讨论将购债规模降至零的可能性。此外，欧洲央行在“必要情况下”仍有可能再次扩大购债计划。外界认为，德拉吉这一表态是欧洲央行对未来全球政治经济环境缺乏“底气”的表现。</p><p><br></p><p>　　其实，欧洲央行一直担心，政治不确定性将导致全球金融风险上升。在英国脱欧公投后，新“德法意”轴心曾被欧盟机构寄予厚望，但从目前来看，这一“轴心”成型尚需时日。在此次货币政策会议举行前数日，意大利总理伦齐的宪法改革主张被全民公投否决，意大利不仅在明年面临着国内政治洗牌的压力，还被其银行业存在的高风险债务压得喘不过气来，甚至让整个欧元区都为其捏把汗；法德两国明年将举行大选，这两个欧盟大国除了要避免被极右政党与民粹思潮绑架，还得以身作则，继续坚持推行国内结构性改革，困难重重。</p><p><br></p><p>　　欧洲当地舆论认为，现实留给欧洲央行调整货币政策的发挥空间已经愈发有限，QE的效果对于当前欧洲经济形势的影响已经不再明显，倒是银行、储户、保险业正在面临不断上升的风险。德国央行近日就批评欧洲央行延长债务购买期限的做法是“逾越自身职权范围，变相资助政府预算”。德国媒体认为，新一轮QE是在向南欧国家“发送错误信号”，新计划或使意大利、西班牙这样的国家懈怠于结构性改革进程，最终的埋单人将依然是德国。</p><p><br></p><p style="text-align: right;"><span style="color: rgb(165, 165, 165);">（本文来源中国经济网）</span></p><p><br></p></div>',
            'author' => 'kaleo',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d"),
            ],
           // [
           // 'title' => 'tart',
           // 'atsort_id' => 22,
           // 'full_title' =>'tart' ,
           // 'subhead' => 'tart',
           // 'content' => '',
           // 'author' => 'kaleo',
           // 'created_at' => date("Y/m/d"),
           // 'updated_at' => date("Y/m/d"),
           // ],
           // [
           // 'title' => 'tart',
           // 'atsort_id' => 11,
           // 'full_title' =>'tart' ,
           // 'subhead' => 'tart',
           // 'content' => '',
           // 'author' => 'kaleo',
           // 'created_at' => date("Y/m/d"),
           // 'updated_at' => date("Y/m/d"),
           // ],
           // [
           // 'title' => 'tart',
           // 'atsort_id' => 11,
           // 'full_title' =>'tart' ,
           // 'subhead' => 'tart',
           // 'content' => '',
           // 'author' => 'kaleo',
           // 'created_at' => date("Y/m/d"),
           // 'updated_at' => date("Y/m/d"),
           // ],
        ]);
    
    }
}
