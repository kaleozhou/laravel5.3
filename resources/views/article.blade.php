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
</div>
@endsection
@section('content')
<div class="detail">
    <!-- 左边 -->
    <!-- end 左边 -->
    <div class="left">
        <div class="news">
            <h1>{{$article->title}}</h1>
            <div class="t_link">
                <dl>位置：<a href="#">首页</a> &gt; <a href="#">{{$parent_sort->name}}</a> &gt; <a href="#">{{$article->atsort->name}}</a> &gt; 详情页</dl>
            </div>
            <div class="text">
                <p style="text-align: center;">
                {!!$article->content!!}        
                </p>
            </div>
            <div> <a href="/art/{{$article->id-1}}" class="btn btn-primary pull-left">上一篇</a> <a href="/art/{{$article->id+1}}" class="btn btn-warning pull-right">下一篇</a>
                <script type="text/javascript" src="http://www.hncecgj.com/themes/LTZ_V2.0/Public/js/qrcode.min.js"></script>
                <div id="qrcode" style="width: 100px;margin:0 auto"></div>
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
width: 100,
    height: 100
});

function makeCode() {
    qrcode.makeCode("http://www.hncecgj.com/article/index/id/141.html");
}
makeCode();

</script>
            </div>
        </div>
    </div>
    @endsection
