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
@endsection
