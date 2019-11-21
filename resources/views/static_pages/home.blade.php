@extends('layouts.default')
@section('content')
<div class="jumbotron">
<h1>hello laravel</h1>
<p class="lead">
你现在所看到的是<a href="https://limitless-thicket-80157.herokuapp.com/" >laravel入门教程</a>的示例项目主页
</p>
<p>一切将从这里开始</p>
<p>
    <a class='btn btn-lg btn-success' href="{{route('signup')}}" role='button'>
            现在注册
    </a>
    
</p>

</div>
@stop