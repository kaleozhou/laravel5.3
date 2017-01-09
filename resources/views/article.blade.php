@extends('layouts.app')
@section('banner')
<div class="banner">
        <div class="a_nav">
            <ul>
                <li class="first"><a href="136.html">{{$parent_sort->name}}</a></li>
                @foreach ($list_sort as $sort)
                <li><a href="#">{{$sort->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
@section('content')
<div class="news">
    <h1>{{$article->title}}</h1>
    <div class="t_link">
        <dl>位置：<a href="../../../index.html">首页</a> &gt; <a href="141.html">{{$article->Sort->name}}</a> &gt; <a href="141.html">上市品种</a> &gt; 详情页</dl>
    </div>
    <div class="text">
        <p style="text-align: center;">
        {!!$content!!}        
        </p>
    </div>
    <div> <a href="http://www.hncecgj.com/article/index/id/140.html" class="btn btn-primary pull-left">上一篇</a> <a href="142.html" class="btn btn-warning pull-right">下一篇</a>
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
@endsection
