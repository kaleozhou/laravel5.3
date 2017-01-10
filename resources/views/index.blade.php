@extends('layouts.app')

@section('banner')
<div class="sliide_out">
    <ul class="slides">
        <li style="background:url(data/upload/20161220/5858e394d6448.jpg) no-repeat center center">
            <a href="portal/page/index/id/120.html" title="手机交易软件（双版）震撼上线"></a>
        </li>
        <li style="background:url(data/upload/20161218/5855e1409d0c1.jpg) no-repeat center center">
            <a href="portal/article/index/id/266.html" title="国际模式招商"></a>
        </li>
        <li style="background:url(data/upload/20161214/5850a456e9575.jpg) no-repeat center center">
            <a href="portal/page/index/id/120.html" title="行情分析系统上线"></a>
        </li>
    </ul>
</div>
<script src="themes/LTZ_V2.0/Public/js/jquery.flexslider-min.js"></script>
<script>
$(function() {
    $('.sliide_out').flexslider({
    animation: "slide",
        directionNav: true,
})
})

</script>
@endsection
@section('content')
<div class="xnews">
    <div class="x_l">
        <div class="x_title">资讯中心</div>
        <div class="jd_img">
            <div class="focus">
                <ul class="rslides">
                    <li>
                        <a href="portal/article/index/id/169.html" target="_blank" title="海南大宗商品交易中心正式挂牌营业"><img src="data/upload/20160918/57de3458ee412.jpg" alt="海南大宗商品交易中心正式挂牌营业" /></a>
                    </li>
                </ul>
            </div>
            <script src="themes/LTZ_V2.0/Public/js/jd_img.js" type="text/javascript"></script>
        </div>
        <div class="kstd">
            <a href="portal/page/index/id/121.html" class="first"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/a_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/a.png"><br />会员列表</a>
            <a href="portal/list/index/id/23.html" class="second"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/b_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/b.png"><br />网上开户</a>
            <a href="portal/page/index/id/120.html" class="third"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/c_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/c.png"><br />下载中心</a>
            <a href="portal/list/index/id/12.html" class="fourth"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/d_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/d.png"><br />业务流程</a>
            <a href="portal/list/index/id/14.html" class="fifth"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/e_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/e.png"><br />常见问题</a>
            <a href="portal/list/index/id/16.html" class="sixth"><img class="hong" src="themes/LTZ_V2.0/Public/images/ico/f_1.png"><img class="hui" src="themes/LTZ_V2.0/Public/images/ico/f.png"><br />上市品种</a>
        </div>
<script type="text/javascript">
$(document).ready(function() {

    $(".kstd a").hover(function() {
        $(this).children('img.hong').hide(0);
        $(this).children('img.hui').show(0);
    }, function() {
        $(this).children('img.hui').hide(0);
        $(this).children('img.hong').show(0);
    })

});

</script>
    </div>
    <div class="x_m">
        <a class="out" href="portal/article/index/id/291.html" title="手机交易软件(IOS版)火爆上线！">
            <div class="m_title">手机交易软件(IOS版)火爆上线！</div>
            <div class="m_time">2016-12-20</div>
            <div class="m_info">摘要: 2016年12月20日，海南大宗商品交易中心国际版块手机交易软件(IOS版)火爆上线，满足广大客户多元化的需求，实现一体化服务。...</div>
        </a>
        <div class="m_list aos=" fade-up-right "">
            <ul id="lastNews">
                <li>
                    <a href="portal/article/index/id/289.html" title="手机交易软件(Android版)震撼上线！">
                        <div class="_st">手机交易软件(Android版)震撼上线！</div> <time>2016-09-28</time> </a>
                </li>

                <li>
                    <a href="portal/article/index/id/282.html" title="行情分析系统正式上线">
                        <div class="_st">行情分析系统正式上线</div> <time>2016-09-28</time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/188.html" title="关于400全国服务热线及在线咨询上线的通知">
                        <div class="_st">关于400全国服务热线及在线咨询上线的通知</div> <time>2016-09-28</time> </a>
                </li>

                <li>
                    <a href="portal/article/index/id/174.html" title="关于中国建设银行第三方存管业务测试上线通知">
                        <div class="_st">关于中国建设银行第三方存管业务测试上线通知</div> <time>2016-09-14</time> </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="x_r">
        <div class="ggtz">
            <div class="title"> <a href="portal/list/index/id/18.html" class="_more">MORE+</a> <a href="index.html" target="_blank">公告通知</a> </div>
            <ul>

                <li>
                    <a href="portal/article/index/id/237.html" title="关于2016年感恩节提前休市通知">
                        <div class="_st">关于2016年感恩节提前休市通知</div> <time>2016-11-21</time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/234.html" title="关于建行E商贸通业务调整的通知">
                        <div class="_st">关于建行E商贸通业务调整的通知</div> <time>2016-11-18</time> </a>
                </li>


                <li>
                    <a href="portal/article/index/id/189.html" title="关于官方网站正式上线的通知">
                        <div class="_st">关于官方网站正式上线的通知</div> <time>2016-09-28</time> </a>
                </li>

                <li>
                    <a href="portal/article/index/id/171.html" title="2016年中秋节假期交易时间调整的通知">
                        <div class="_st">2016年中秋节假期交易时间调整的通知</div> <time>2016-09-12</time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/172.html" title="关于2016年美国劳工节提前休市通告">
                        <div class="_st">关于2016年美国劳工节提前休市通告</div> <time>2016-08-31</time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/173.html" title="关于美国独立日提前休市的通知">
                        <div class="_st">关于美国独立日提前休市的通知</div> <time>2016-06-29</time> </a>

                </li>
                <li>
                    <a href="portal/article/index/id/219.html" title="关于调整部分品种交易时间的通知">
                        <div class="_st">关于调整部分品种交易时间的通知</div> <time>2016-10-28</time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/207.html" title="关于中国建设银行E商贸通业务上线的公告">
                        <div class="_st">关于中国建设银行E商贸通业务上线的公告</div> <time>2016-10-21</time> </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="y_r">
    <style type="text/css">
.mtbd {
    width: 33.33%;
    height: 40px;
    float: left;
    font-size: 25px;
    color: rgb(232, 64, 71);
}

            .mtbdxg {
                width: 100%;
                height: 387px;
                float: left;
            }

            .mtnr {
                width: 387px;
                float: left;
            }

            .mtnr li {
                position: relative;
                text-indent: 16px;
                height: 39px;
                line-height: 39px;
                border-bottom: 1px dashed #DBDBDB;
                overflow: hidden;
                background: url('./themes/LTZ_V2.0/Public/images/r_ggtz.png') no-repeat left center;
            }

            ._st {
                width: 310px;
                float: left;
                height: 39px;
            }

            .date_time {
                float: left;
            }

    </style>
    <div class="mtbd">媒体报道</div>
    <div class="mtbd">财经要闻</div>
    <div class="mtbd">&nbsp;&nbsp;&nbsp;宣传视频</div>
    <div class="mtbdxg">
        <div class="mtnr">
            <ul id="lastNews">
                <li class="lastnew">
                    <a href="../../../article/index/id/274.html" title="中金在线报道">
                        <div class="_st">中金在线报道挂牌上线</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/16</big></span></time> </a>
                </li>
                <li>
                    <a href="../../../article/index/id/272.html" title="迅视财经报道挂牌上线">

                        <div class="_st">迅视财经报道挂牌上线</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/16</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/270.html" title="FX678行业频道报道挂牌上线">
                        <div class="_st">FX678行业频道报道挂牌上线</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/16</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/263.html" title="中金在线网报道海南大宗商品交易中心国际版块上线在即">
                        <div class="_st">中金在线网报道海南大宗商品交易中心国际版块上线在即</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/14</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/264.html" title="钱途网报道海南大宗商品交易中心国际版块上线在即">
                        <div class="_st">钱途网报道海南大宗商品交易中心国际版块上线在即</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/14</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/271.html" title="市商网报道挂牌上线">
                        <div class="_st">市商网报道挂牌上线</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/09</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/277.html" title="热烈祝贺0003号经纪会员正式入驻国际版块">
                        <div class="_st">热烈祝贺0003号经纪会员正式入驻国际版块</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/09</big></span></time> </a>
                </li>
            </ul>

        </div>
        <div class="mtnr">
            <ul id="lastNews">
                <li>

                    <a href="portal/article/index/id/231.html" title="明年中国大宗商品市场将整体升温">
                        <div class="_st">明年中国大宗商品市场将整体升温</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/19</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/224.html" title="指数单月涨幅10.4%大宗商品创13年来“最好十月">
                        <div class="_st">指数单月涨幅10.4%大宗商品创13年来“最好十月</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/16</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/225.html" title="方星海：支持期货公司拓展融资渠道">
                        <div class="_st">方星海：支持期货公司拓展融资渠道</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/16</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/226.html" title="人民币贬值压力哪来的?">
                        <div class="_st">人民币贬值压力哪来的?</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/14</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/227.html" title="坚持实施稳健货币政策，注重抑制资产泡沫和防范经济金融风险">
                        <div class="_st">坚持实施稳健货币政策，注重抑制资产泡沫和防范经济金融风险</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/14</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/228.html" title="配资助推中国大宗商品市场繁荣">
                        <div class="_st">配资助推中国大宗商品市场繁荣</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/09</big></span></time> </a>
                </li>
                <li>
                    <a href="portal/article/index/id/230.html" title="影响银价长期走势不是美国大选">
                        <div class="_st">影响银价长期走势不是美国大选</div> <time class="date_time"><span class="_date"><small>12月 </small><big>/09</big></span></time> </a>
                </li>
            </ul>

        </div>
        <div class="spzs">
            <a href="portal/page/index/id/177.html" target="_blank"><img src="themes/LTZ_V2.0/Public/images/video_3.jpg"></a>
        </div>

    </div>



</div>
<script type="text/javascript">
$(document).ready(function() {

    $(".tab_hzhb").hover(function() {
        $(".tab_links").removeClass("now");
        $(this).addClass("now");
        $(".b_links").hide(0);
        $(".b_hzhb").show(0);
    });

    $(".tab_links").hover(function() {
        $(".tab_hzhb").removeClass("now");
        $(this).addClass("now");
        $(".b_hzhb").hide(0);
        $(".b_links").show(0);
    });
});

</script>
@endsection
