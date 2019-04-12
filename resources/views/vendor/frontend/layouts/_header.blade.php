@php

    $navigations = frontend_navigation('desktop');
    //$currentBrothersAndChildNavigation = frontend_current_brother_and_child_navigation('desktop');

    $currentChildNavigations = frontend_current_child_navigation('desktop');
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="{{URL::asset('css/index2.css')}}" rel="stylesheet">
</head>

<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a><img src="{{URL::asset('images/frontend/logo.png')}}"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li ><a href="">首页</a></li>
            <li><a href="">企业文化</a></li>
            <li><a href="">产品中心</a></li>
            <li><a href="">新网资讯</a></li>
            <li><a href="">茶油文化</a></li>
            <li><a href="">联系我们</a></li>
        </ul>
    </div><!--/.nav-collapse -->
</div>

