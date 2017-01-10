@extends('layouts.app')
@section('banner')
<div class="banner">
    <div class="a_nav">
        <ul>
            <li class="first"><a href="#">{{$parent_sort->name}}</a></li>
            @foreach ($list_sort as $sort)
            <li><a href="/artlist/{{$sort->id}}">{{$sort->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('content')
   <div class="list">
    <div class="l_title">{{$atsort->name}}</div>
    <hr width="800px" size="1" color="#999" style="margin: 0px;" />
    <div class="left fl">
        <div class="l_in">
            @foreach($articles as $article)
            <a href="/art/{{$article->id}}"> <span class="title"></span> <span class="info">{{$article->title}}</span> <span class="other"> <dt class="time">{{$article->created_at}}</dt> <dl class="more">查看详情 ></dl> </span> </a>
            @endforeach
        </div>
        <div class="l_num">
            <ul>
                <li class="active current"><span class="current">1</span> </li>
                <li><a href="#"> 2</a> </li>
                <li><a href="#">下一页</a> </li>
                <li><a href="#">尾页</a> </li>
            </ul>
        </div>
    </div>
    <div class="right" style=" margin-top: 51px;"> <div class="r_ad"></div> <div class="r_list"> <p>资讯中心&nbsp;<small>News Center</small></p> <ul> <li><a href="291.html" title="手机交易软件(IOS版)火爆上线！" target="_blank">手机交易软件(IOS版)火爆上线！</a><small>[12-20]</small></li><li><a href="290.html" title="德国欲在亚投行高调行事 协调欧洲对接&quot;一带一路&quot;" target="_blank">德国欲在亚投行高调行事 协调欧洲对接"一带一路"</a><small>[12-20]</small></li><li><a href="289.html" title="手机交易软件(Android版)震撼上线！" target="_blank">手机交易软件(Android版)震撼上线！</a><small>[12-19]</small></li><li><a href="288.html" title="沉着应对美联储加息" target="_blank">沉着应对美联储加息</a><small>[12-19]</small></li><li><a href="287.html" title="热烈祝贺国际版块迎来0017号经纪会员" target="_blank">热烈祝贺国际版块迎来0017号经纪会员</a><small>[12-16]</small></li><li><a href="286.html" title="热烈祝贺0009号经纪会员正式入驻国际版块" target="_blank">热烈祝贺0009号经纪会员正式入驻国际版块</a><small>[12-16]</small></li><li><a href="285.html" title="全球经济在不确定性中前行" target="_blank">全球经济在不确定性中前行</a><small>[12-16]</small></li><li><a href="284.html" title="欧洲央行“一加一减”为哪般" target="_blank">欧洲央行“一加一减”为哪般</a><small>[12-15]</small></li><li><a href="283.html" title="热烈祝贺国际版块0022号经纪会员成功激活" target="_blank">热烈祝贺国际版块0022号经纪会员成功激活</a><small>[12-14]</small></li><li><a href="282.html" title="行情分析系统正式上线" target="_blank">行情分析系统正式上线</a><small>[12-14]</small></li><li><a href="281.html" title="橡胶铁矿石等多个品种价格再创新高" target="_blank">橡胶铁矿石等多个品种价格再创新高</a><small>[12-14]</small></li><li><a href="280.html" title="2016年经济发展回眸：供给侧，改革攻坚见实效" target="_blank">2016年经济发展回眸：供给侧，改革攻坚见实效</a><small>[12-13]</small></li> </ul> <div class="clearfix"></div> </div> </div>
    <div class="clearfix"></div>
</div>
@endsection
