@extends('html.base')

@section('title')
    {{$name}}
@endsection

@section('body')
    <h1>主体内容</h1>
    <hr>
    <p>当前路由: {{$name}}</p>

    <p>本页仅作参考,实际内容自行修改</p>

@endsection
