<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <script src="/js/jquery.min.js"></script>
        <link href="/css/default.css" rel="stylesheet">
        <!-- Scripts -->
<script>
window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(),]); ?>
</script>
    </head>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="top_info">
                            <li>官方网址: www.hncecgj.com</li>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                            <li class='tell'>24小时服务热线: 400-6868-288</li>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    </div>
    <div class="header">
        <div class="menu">
            <div class="logo">
                <a href="index.html"><img src="/images/logo.png"></a>
            </div>
            <ul class="nav"> <span><a class="f" href="index.html">网站首页</a></span> <span><a class="f" href="index.html">关于我们</a> <ul class="sub-nav"> <li><a href="portal/article/index.html/id/130.html">公司简介</a></li> <li><a href="portal/article/index.html/id/167.html">股东背景</a></li> <li><a href="portal/article/index.html/id/168.html">企业优势</a></li> <li><a href="portal/article/index.html/id/133.html">人才招聘</a></li> <li><a href="portal/article/index.html/id/132.html">联系方式</a></li> </ul> </span> <span><a class="f" href="index.html###">业务介绍</a> <ul class="sub-nav"> <li><a href="portal/article/index.html/id/185.html">业务流程</a></li> <li><a href="portal/list/index.html/id/13.html">交易规则</a></li> <li><a href="portal/list/index.html/id/23.html">开户指引</a></li> <li><a href="portal/page/index.html/id/120.html">相关下载</a></li> <li><a href="portal/list/index.html/id/14.html">常见问题</a></li> <li><a href="portal/list/index.html/id/15.html">法律法规</a></li> </ul> </span> <span><a class="f" href="index.html###">信息披露</a> <ul class="sub-nav"> <li><a href="portal/list/index.html/id/18.html">公告通知</a></li> <li><a href="portal/list/index.html/id/19.html">其它公告</a></li> <li><a href="portal/page/index.html/id/271.html">会员信息查询</a></li> </ul> </span> <span><a class="f" href="index.html###">交易品种</a> <ul class="sub-nav"> <li><a href="portal/list/index.html/id/16.html">上市品种</a></li> <li><a href="portal/list/index.html/id/17.html">拟上市品种</a></li> </ul> </span> <span><a class="f" href="index.html###">资讯中心</a> <ul class="sub-nav"> <li><a href="portal/list/index.html/id/10.html">国际新闻</a></li> <li><a href="portal/list/index.html/id/4.html">行业新闻</a></li> <li><a href="portal/list/index.html/id/22.html">媒体报道</a></li> </ul> </span><span> <div style="color:#000;height:100px;width: 100px; font-size: 15px; text-align: right;line-height:100px; display:inline-block;" >服务热线：</div></span><lable style="color:red;font-size: 25px;height:100px;width: 160px; text-align: left;line-height:100px; ">400-6868-288</lable>
                <!--     <span><a class="f" href="###">合作机构</a> <ul class="sub-nav"> <li><a href="/portal/page/index.html/id/121.html">会员列表</a></li> <li><a href="/portal/list/index.html/id/20.html">会员资讯</a></li> </ul> </span> -->
            </ul>
        </div>
    </div>
<script>
$(function() {
    $(".nav>span").hover(function() {
        $(this).children('ul').stop(true, true).slideDown(300);
    }, function() {
        $(this).children('ul').stop(true, true).slideUp(1);
    })
})
</script>
@yield('content')
<!-- Scripts -->
<script src="/js/app.js"></script>
<div class="h_l">
    <ul>
        <li class="tab_hzhb now">合作伙伴</li>
        <li class="tab_links">友情链接</li>
    </ul>
</div>
<!-- 合作伙伴 -->
<div class="hzhb b_hzhb">
    <div class="listwrap">
        <div class="h_list bd" id="ISL_Cont_1d6">
            <ul class="clearfix">
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_1.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_2.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_3.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_4.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_5.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_7.jpg"></a>
                </li>
                <li>
                    <a href="index.html###"><img src="/images/hzhb/hzhb_8.jpg"></a>
                </li>
            </ul>
        </div>
    </div>
    <script src="/js/ScrollPicleft.js"></script>
<script language="javascript" type="text/javascript">
var scrollPic_06 = new ScrollPicleft();
scrollPic_06.scrollContId = "ISL_Cont_1d6"; // 内容容器ID""
scrollPic_06.arrLeftId = "Left_ding6"; //左箭头ID
scrollPic_06.arrRightId = "Right_ding6"; //右箭头ID
scrollPic_06.frameWidth = 1200; //显示框宽度
scrollPic_06.pageWidth = 1236; //翻页宽度,加上单个间距
scrollPic_06.speed = 10; //移动速度(单位毫秒，越小越快)
scrollPic_06.space = 10; //每次移动像素(单位px，越大越快)
scrollPic_06.autoPlay = true; //自动播放
scrollPic_06.autoPlayTime = 3; //自动播放间隔时间(秒)
scrollPic_06.initialize(); //初始化
</script>
</div>
<div class="links b_links" style="display: none;">
    <ul>
        <!-- <li class="title">友情链接：</li> -->
        <li><a href="http://www.hifarms.com.cn/" target="_blank" rel="" title="海南农垦">海南农垦&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.gnnt.com.cn" target="_blank" rel="" title="金网安泰">金网安泰&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.hexun.com/" target="_blank" rel="" title="和讯网">和讯网&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.fx168.com/" target="_blank" rel="" title="FX168财经">FX168财经&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.qhrb.com.cn/" target="_blank" rel="" title="期货日报">期货日报&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.cnfol.com/" target="_blank" rel="" title="中金在线">中金在线&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.100ppi.com/" target="_blank" rel="" title="生意社">生意社&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.xhhui.com/" target="_blank" rel="" title="现货汇">现货汇&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.otcbeta.com/" target="_blank" rel="" title="市商网">市商网&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.cngold.com.cn/" target="_blank" rel="" title="中金网">中金网&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.fx678.com/" target="_blank" rel="" title="汇通网">汇通网&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <li><a href="http://www.moneytu.com/" target="_blank" rel="" title="钱途网">钱途网&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
<!-- 公司链接 -->
<div class="footer">
    <div class="f_in">
        <div class="nav fl">
            <ul>
                <li class="first"><a href="index.html">网站首页</a></li>
                <li><a href="portal/article/index/id/130.html">关于我们</a></li>
                <li><a href="portal/article/index/id/185.html">业务流程</a></li>
                <li><a href="portal/page/index/id/120.html">相关下载</a></li>
                <li><a href="portal/list/index/id/18.html">公告通知</a></li>
                <li><a href="portal/list/index/id/14.html">常见问题</a></li>
                <li><a href="portal/article/index/id/132.html">联系我们</a></li>
                <li>投诉电话：0898-68564521</li>
            </ul>
            <div class="bq">版权所有 © 海南大宗商品交易中心国际版块 琼ICP备16002360号-1</div>
        </div>
        <div class="tell fr"> <dt>24小时服务热线</dt>
            <dl>400-6868-288</dl>
        </div>
    </div>
</div>
<div class="yb_conct">
    <div class="yb_bar">
        <ul>
            <li class="yb_top">返回顶部</li>
            <li class="yb_phone">400-6868-288</li>
            <li class="yb_ercode" style="height:53px;">
                微信订阅号 <br> <img class="hd_qr" src="/images/wxkf_gp.jpg" width="125" alt="微信订阅号"> </li>
        </ul>
    </div>
</div>
<script>
$(function() {
    $(".yb_conct").stop(true);
    $(".yb_conct").css("right", "5px");
    $(".yb_bar .yb_ercode").css('height', '200px');
    // 悬浮窗口
    $(".yb_conct").hover(function() {
        $(".yb_conct").stop(true);
        $(".yb_conct").css("right", "5px");
        $(".yb_bar .yb_ercode").css('height', '200px');
    }, function() {
        $(".yb_conct").stop(true);
        $(".yb_conct").css("right", "-127px");
        $(".yb_bar .yb_ercode").css('height', '53px');
    });
    // 返回顶部
    $(".yb_top").click(function() {
        $("html,body").animate({
        'scrollTop': '0px'
    }, 300)
    });
});
</script>
<div style="display:none;"> </div>
<script language="javascript">
//弹窗
function setCookie(www_hncec_listing_com, value, expire) {
    window.document.cookie = www_hncec_listing_com + "=" + escape(value) + ((expire == null) ? "" : ("; expires=" + expire.toGMTString()));
}
function getCookie(www_hncec_listing_com) {
    var search = www_hncec_listing_com + "=";
    if (window.document.cookie.length > 0) { // if there are any cookies
        offset = window.document.cookie.indexOf(search);
        if (offset != -1) { // if cookie exists
            offset += search.length;
            // set index of beginning of value
            end = window.document.cookie.indexOf(";", offset)
                // set index of end of cookie value
                if (end == -1) end = window.document.cookie.length;
            return unescape(window.document.cookie.substring(offset, end));
        }
    }
    return null;
}
function register(www_hncec_listing_com) {
    var today = new Date();
    var expires = new Date();
    expires.setTime(today.getTime() + 1000 * 60 * 60 * 1);
    setCookie("hncec_listing_com", www_hncec_listing_com, expires);
}
function openWin() {
    var c = getCookie("hncec_listing_com");
    if (c != null) {
        return;
    }
    //register("hncec_listing_com");
    //var bh = $("body").height();
    var bh = document.documentElement.clientHeight; //可见区域高度
    var ss = document.body.scrollHeight;
    var bw = $("body").width();
    $("#fullbg").css({
    height: ss,
        width: bw,
        display: "block"
    });
    $("#fxts").show();
}
setTimeout("openWin()", 1000);
window.focus();
//关闭灰色 jQuery 遮罩
function closeBg() {
    register("hncec_listing_com");
    $("#fullbg,#fxts").hide();
}
</script>
<style type="text/css">
@charset "utf-8";
#fullbg {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 100000000;
    background: url('/images/backbg.png');
}
        .FloatBox {
            position: absolute;
            left: 25%;
            width: 50%;
            z-index: 100000000000;
            display: none;
            border: 1px solid #fff;
            margin: 4% auto;
            background: url('/images/backbg.png');
            padding: 30px;
        }
        .FloatBox span {
            color: #FFF;
            text-align: center;
            font-size: 21px;
            height: 50px;
            line-height: 50px;
            margin-bottom: 30px;
            border-bottom: 1px solid #FFF;
            color: #e3c554;
            margin-top: 10px;
            display: block;
        }
        .FloatBox p {
            font-size: 14px;
            width: 100%;
            color: #FFF;
            line-height: 24px;
            margin-top: 10px;
            overflow: hidden;
            text-align: justify;
        }
        .btn_tc {
            padding: 10px 25px;
            width: 200px;
            height: 30px;
            margin: 10px auto;
            text-align: center;
            line-height: 30px;
            display: block;
            border: 1px solid #FFF;
            font-size: 15px;
            color: #FFF;
            cursor: pointer;
            font-weight: bold;
        }
        .btn_tc:hover {
            background-color: #FFF;
            color: #000;
        }
</style>
<div id="fullbg" style="display:none;">
    <div class="FloatBox" id="fxts"> <span>交易商参与现货交易注意事项及交易中心免责声明</span></h3>
    <p>各位同事、新老客户、合作伙伴及供应商伙伴：<br /></p>
    <p>
    为加强风险控制、明确权利责任，海南大宗商品交易中心国际版块在此作如下特别提示，请交易商仔细阅读并知悉其中内容，并审慎选择是否参与交易：<br /> 1、交易商在参与交易之前务必详尽地了解现货交易的基本知识和相关风险以及交易中心有关的业务规则等，依法合规地从事大宗商品现货交易业务。<br /> 2、交易中心为了确保市场“公开、公平、公正”和健康稳定地发展，将采取更加严格的措施，强化市场的监管。请您务必密切地关注有关该市场的公告、风险提醒（包括但不限于交易场所发布公告、官网公告）等信息，及时了解市场风险状况，做到理性交易，切忌盲目跟风。
    <br /> 3、现货交易业务只适合于满足以下全部条件的交易商：（1）年满20周岁（含），且60周岁（含）以内，并具有完全民事行为能力的中国公民或依法在中华人民共和国境内注册成立的企业法人。 （2）能够充分理解有关此交易的一切风险，并且具有风险承受能力。（3）因交易失误而造成账户资金部分或全部损失、仍不会改变其正常的生活方式或影响其正常生产经营状况的。<br /> 4、交易中心、会员单位及其工作人员不会对交易商作出获利保证，并且不得与交易商达成分享收益或共担交易风险的协议或约定。交易商应明确所有针对现货交易业务的任何获利保证或不会发生亏损的承诺均为无效要约，交易商因此进行交易而产生的损失，交易中心不承担任何责任。
    <br /> 5、交易商的成交单据必须建立在自主决定的基础之上。交易中心、综合会员及其工作人员提供的任何关于市场的分析和信息，仅供交易商参考，不构成任何要约或承诺。由此而造成的交易风险由交易商自行承担。 6、由于价格受多种因素的影响（如国际经济形势、外汇汇率、相关市场走势、供求关系、政治局势和能源价格等）造成剧烈波动而出现报价跳空，产生交易风险的，交易中心不负有任何责任。<br /> 7、在电子交易的过程中，有可能出现偶然性的明显的错误报价，交易中心可能事后会对错价及错价产生的盈亏作出纠正，由此而造成的交易风险由交易商自行承担。 <br /> 8、任何因交易中心不能够控制的原因，包括但不限于火灾、爆炸、台风、洪水、地震、潮汐、雷电、战争、供电、电信及通信设备中断、罢工、政府管制、法规政策变更、交易中心暂停交易、交易中心规则中规定的交易异常、设备故障、通讯故障、互联网系统故障及通过互联网未经许可的存取、盗窃交易敏感性数据、他人恶意地对网站攻击、计算机病毒及非可归因于任何一方的信息传递中断等其他无法预测或防范的不可抗力事件，都有可能会对交易商的交易产生影响，交易商应该充分了解并承担由此造成的全部损失。
    <br /> 9、由于发生不可抗力及国家有关法律、法规、规章、政策的改变、紧急措施的出台等导致交易系统临时或永久性关闭、交易品种的变更或取消等风险，交易中心不承担责任。<br /><br /> </p>
    <p>以上所有内容均具有法律效力，交易商应认真、仔细阅读，其内容所涉法律含义及相关法律后果已完全知晓，并完全理解和同意全部内容。</p>
    <p style="text-align:center;"> <a class="btn_tc" onclick="closeBg();">我已阅读并同意</a> </p>
    </div>
</div>
</body>
</html>
