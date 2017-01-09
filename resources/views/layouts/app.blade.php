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
<div class="footer">
    <div class="f_in">
        <div class="nav fl">
            <ul>
                <li class="first"><a href="../../../../index.html">网站首页</a></li>
                <li><a href="../../../article/index/id/130.html">关于我们</a></li>
                <li><a href="../../../article/index/id/185.html">业务流程</a></li>
                <li><a href="../../../page/index/id/120.html">相关下载</a></li>
                <li><a href="18.html">公告通知</a></li>
                <li><a href="14.html">常见问题</a></li>
                <li><a href="../../../article/index/id/132.html">联系我们</a></li>
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
                微信订阅号 <br> <img class="hd_qr" src="../../../../themes/LTZ_V2.0/Public/images/wxkf_gp.jpg" width="125" alt="微信订阅号"> </li>
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
</body>
</html>
