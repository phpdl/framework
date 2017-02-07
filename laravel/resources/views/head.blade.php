<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{title1}}-动力学院</title>
    <link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery1.js')}}" type="text/javascript"></script>

    @yield('css')
</head>

<body>
<header>
    <div class="box">
        <div class="logo"><a href="./" id="logo"><img src="{{asset('img/logo.png')}}" width="360" height="70" border="0"></a>
            <h1><span>全国统一报名热线：</span><b>{tel}</b></h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{asset('/')}}" class="navnow">网站首页</a></li>
                <li><a href="{{asset('/about')}}">动力学院</a></li>
                <li><a href="{{asset('/list')}}">新闻列表页</a></li>
                <li><a href="###">图片列表页</a></li>
                <li><a href="###">图片列表二</a></li>
                <li><a href="{{asset('/content')}}">详细内容页</a></li>
                <li><a href="###">留言1</a></li>
                <li><a href="http://www.phpdl.com" target="_blank">课程大纲</a></li>
            </ul>
        </nav>
    </div>
</header>