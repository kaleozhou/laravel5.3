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
            <ul class="nav"> 
                <span><a class="f" href="/">网站首页</a></span> 
                @foreach($atsortdata as $atsort01=>$atsort02s)
                <span><a class="f" href="#">{{$atsort01}}</a> 
                    <ul class="sub-nav">
                    @foreach($atsort02s as $atsort02)
                        <li><a href="/artlist/{{$atsort02->id}}">{{$atsort02->name}}</a></li>
                    @endforeach
                    </ul>
                </span>
                @endforeach
                <span> <div style="color:#000;height:100px;width: 100px; font-size: 15px; text-align: right;line-height:100px; display:inline-block;" >服务热线：</div></span><lable style="color:red;font-size: 25px;height:100px;width: 160px; text-align: left;line-height:100px; ">400-6868-288</lable>
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
@yield('banner')
@yield('content')
<!-- 右边 -->
<div class="right">
    <div class="r_ad"></div>
    <div class="r_list">
        <p>资讯中心&nbsp<small>News Center</small></p>
        <ul>
            <li><a href="../../../portal/article/index/id/291.html" title="手机交易软件(IOS版)火爆上线！" target="_blank">手机交易软件(IOS版)火爆上线！</a><small>[12-20]</small></li>
            <li><a href="../../../portal/article/index/id/290.html" title="德国欲在亚投行高调行事 协调欧洲对接&quot;一带一路&quot;" target="_blank">德国欲在亚投行高调行事 协调欧洲对接&quot;一带一路&quot;</a><small>[12-20]</small></li>
            <li><a href="../../../portal/article/index/id/289.html" title="手机交易软件(Android版)震撼上线！" target="_blank">手机交易软件(Android版)震撼上线！</a><small>[12-19]</small></li>
            <li><a href="../../../portal/article/index/id/288.html" title="沉着应对美联储加息" target="_blank">沉着应对美联储加息</a><small>[12-19]</small></li>
            <li><a href="../../../portal/article/index/id/287.html" title="热烈祝贺国际版块迎来0017号经纪会员" target="_blank">热烈祝贺国际版块迎来0017号经纪会员</a><small>[12-16]</small></li>
            <li><a href="../../../portal/article/index/id/286.html" title="热烈祝贺0009号经纪会员正式入驻国际版块" target="_blank">热烈祝贺0009号经纪会员正式入驻国际版块</a><small>[12-16]</small></li>
            <li><a href="../../../portal/article/index/id/285.html" title="全球经济在不确定性中前行" target="_blank">全球经济在不确定性中前行</a><small>[12-16]</small></li>
            <li><a href="../../../portal/article/index/id/284.html" title="欧洲央行“一加一减”为哪般" target="_blank">欧洲央行“一加一减”为哪般</a><small>[12-15]</small></li>
            <li><a href="../../../portal/article/index/id/283.html" title="热烈祝贺国际版块0022号经纪会员成功激活" target="_blank">热烈祝贺国际版块0022号经纪会员成功激活</a><small>[12-14]</small></li>
            <li><a href="../../../portal/article/index/id/282.html" title="行情分析系统正式上线" target="_blank">行情分析系统正式上线</a><small>[12-14]</small></li>
            <li><a href="../../../portal/article/index/id/281.html" title="橡胶铁矿石等多个品种价格再创新高" target="_blank">橡胶铁矿石等多个品种价格再创新高</a><small>[12-14]</small></li>
            <li><a href="../../../portal/article/index/id/280.html" title="2016年经济发展回眸：供给侧，改革攻坚见实效" target="_blank">2016年经济发展回眸：供给侧，改革攻坚见实效</a><small>[12-13]</small></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end 右边 -->
<div class="clearfix"></div>
</div>
<!-- 公司链接 -->


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
