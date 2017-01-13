@extends('layouts.app')
@section('banner')
<div class="banner">
    <div class="a_nav">
        <ul>
            <li class="first"><a href="/artlist/{{$article->atsort->id}}">{{$parent_sort->name}}</a></li>
            @foreach ($list_sort as $atsort)
            <li><a href="/artlist/{{$atsort->id}}">{{$atsort->name}}</a></li>
            @endforeach
        </ul>
    </div>
<vue-html5-editor :content="content" :height="500"></vue-html5-editor>
</div>
@endsection
@section('content')
@if (in_array($article->atsort_id,$norightlist))
{!!$article->content!!}
@else
<div class="detail">
    <!-- 左边 -->
    <!-- end 左边 -->
    <div class="left">
        <div class="news">
            @if (in_array($article->atsort_id,$nolist))
            <div style="font-size: 22px; width: 90px; line-height: 50px; height: 50px; border-bottom: 2px solid #971E23; ">{{$article->title}}</div>
            <hr width="100%" size="1" color="#999" style="margin: 0px;">
            {!!$article->content!!}        
            @else
            <h1>{{$article->title}}</h1>
            <div class="t_link">
                <dl>位置：<a href="#">首页</a> &gt; <a href="#">{{$parent_sort->name}}</a> &gt; <a href="#">{{$article->atsort->name}}</a> &gt; 详情页</dl>
            </div>

            {!!$article->content!!}        
            <div> <a href="/art/{{$article->id-1}}" class="btn btn-primary pull-left">上一篇</a> <a href="/art/{{$article->id+1}}" class="btn btn-warning pull-right">下一篇</a>
                <script type="text/javascript" src="themes/LTZ_V2.0/Public/js/qrcode.min.js"></script>
                <div id="qrcode" style="width: 100px;margin:0 auto"></div>
            </div>
            @endif
            <script type="text/javascript">
            var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
                height: 100
            });
            
            function makeCode() {
                qrcode.makeCode("/art/1");
            }
            makeCode();
            
            </script>
        </div>
    </div>
    <div class="right" style=" margin-top: 51px;"> <div class="r_ad"></div> <div class="r_list"> <p>资讯中心&nbsp;<small>News Center</small></p> <ul> <li><a href="291.html" title="手机交易软件(IOS版)火爆上线！" target="_blank">手机交易软件(IOS版)火爆上线！</a><small>[12-20]</small></li><li><a href="290.html" title="德国欲在亚投行高调行事 协调欧洲对接&quot;一带一路&quot;" target="_blank">德国欲在亚投行高调行事 协调欧洲对接"一带一路"</a><small>[12-20]</small></li><li><a href="289.html" title="手机交易软件(Android版)震撼上线！" target="_blank">手机交易软件(Android版)震撼上线！</a><small>[12-19]</small></li><li><a href="288.html" title="沉着应对美联储加息" target="_blank">沉着应对美联储加息</a><small>[12-19]</small></li><li><a href="287.html" title="热烈祝贺国际版块迎来0017号经纪会员" target="_blank">热烈祝贺国际版块迎来0017号经纪会员</a><small>[12-16]</small></li><li><a href="286.html" title="热烈祝贺0009号经纪会员正式入驻国际版块" target="_blank">热烈祝贺0009号经纪会员正式入驻国际版块</a><small>[12-16]</small></li><li><a href="285.html" title="全球经济在不确定性中前行" target="_blank">全球经济在不确定性中前行</a><small>[12-16]</small></li><li><a href="284.html" title="欧洲央行“一加一减”为哪般" target="_blank">欧洲央行“一加一减”为哪般</a><small>[12-15]</small></li><li><a href="283.html" title="热烈祝贺国际版块0022号经纪会员成功激活" target="_blank">热烈祝贺国际版块0022号经纪会员成功激活</a><small>[12-14]</small></li><li><a href="282.html" title="行情分析系统正式上线" target="_blank">行情分析系统正式上线</a><small>[12-14]</small></li><li><a href="281.html" title="橡胶铁矿石等多个品种价格再创新高" target="_blank">橡胶铁矿石等多个品种价格再创新高</a><small>[12-14]</small></li><li><a href="280.html" title="2016年经济发展回眸：供给侧，改革攻坚见实效" target="_blank">2016年经济发展回眸：供给侧，改革攻坚见实效</a><small>[12-13]</small></li> </ul> <div class="clearfix"></div> </div> </div>
    <div class="clearfix"></div>
</div>
@endif
@endsection
