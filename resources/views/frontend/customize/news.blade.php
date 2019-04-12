<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻资讯</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/font/iconfont.css')}}" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    {{--<link href="{{URL::asset('css/news.css')}}" rel="stylesheet">--}}
    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../static/common/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->
    <style>
        .section2{
            width:66%;
            height: 320px;
            /*border:1px solid red;*/
            margin-top: 20px;
            background-color: #F3F4EF;
        }
        .section2 .section2_left{
            /*border:1px solid red;*/
            width:50%;
            height: 320px;
            position:relative;
        }
        .section2 .section2_left img{
            width:100%;
            height: 320px;
            position:absolute;
            top:0;
            left:0;
        }
        .section2 .section2_right .right_title{
            font-size: 25px;
            color: #8a6d3b;
        }
        .section2 .section2_right .right_time{
            font-size: 15px;
            color: #ccc;
        }
        .section2 .section2_right .right_main{
            font-size: 15px;
            width: 100%;
            height: 180px;
            color: #000;
            text-indent:25px;
            margin-top: 10px;
            /*border:1px solid red;*/
        }
        .section3{
            width:68%;
            height: auto;
            /*border:1px solid red;*/
            margin-top: 20px;
        }
        .section3 .section3_box{
            width:32%;
            height: 320px;
            float:left;
            margin-left: 10px;
            /*border:1px solid blue;*/
        }
        .section3 .section3_img{
            width:100%;
            height: 80%;
            text-align: center;
        }
        .section3 .section3_title{
            width:100%;
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            /*border:1px solid red;*/
        }
        .section3 .section3_footer{
            width:100%;
            height: 30px;
            /*border:1px solid red;*/
            position:relative;
        }
        .section3 .section3_footer span:nth-of-type(1){
            color:#ccc;margin-left: 8px;
        }
        .section3 .section3_footer span:nth-of-type(2) a{
            color:#8a6d3b;
            text-align: right;
            position:absolute;
            top:2px;
            right:5px;
        }
        .section4{
            width:68%;
            height: 60px;
            /*border:1px solid red;*/
        }
        .section10{
            background: url('../images/footer.jpg');
            background-size:100% 100%;
            width:100%;
            height:auto;
            /* margin-top:90px; */

        }
        .section10 .page{
            color:#fff;
            float:left;
            /*margin-left:160px;*/
            margin-top: 20px;
        }
        .section10 .page p{
            padding-bottom: 25px;
            padding-top: 18px;
        }
        .section10 .page ul li a{
            color:#fff;
            font-size: 16px;

        }
        .section10 .store{
            color:#fff;
            /*margin-left:360px;*/
            margin-top: 38px;
            width:300px;
            float:left;
            height: auto;
        }
        .section10 img{
            width:46px;height: 46px;
        }
        .section10 .store p{
            padding-bottom: 8px;
        }
        .section10 .contact{
            color:#fff;
            /*float:left;*/
            /*margin-left:80px;*/
            margin-top: 50px;
        }
        .section10 .contact img{
            width:38px;height: 35px;
        }
        .footer1{
            color:#fff;
        }
        .section10 .taobao{
            margin-top: 15px;
        }
        .taobao img{
            margin-top: 10px;
        }
        .taobao *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo img{
            margin-left: 10px;
        }
        .weixin *{
            vertical-align: middle;
            color: #fff;
        }
        @media screen and (max-width:768px) {
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
                /* height:200px !important; */
            }

            .header {
                width: 100%;
                height: 180px;
            }
            .section2{
                width:100%;
                height: 400px;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section2 .section2_left{
                /*border:1px solid red;*/
                width:100%;
                height: 200px;
                position:relative;
            }
            .section2 .section2_left img{
                width:100%;
                height: 200px;
                position:absolute;
                top:0;
                left:0;
            }
            .section2 .section2_right .right_title{
                font-size: 12px;
                color: #8a6d3b;
                text-align: center;
                margin-top: 10px;
            }
            .section2 .section2_right .right_time{
                font-size: 8px;
                text-align: center;
                color: #ccc;
            }
            .section2 .section2_right .right_main{
                font-size: 10px;
                width: 100%;
                height: 100px;
                color: #000;
                text-indent:25px;
                margin-top: 10px;
                /*border:1px solid red;*/
            }
            .section2 .section2_right .right_img{
                display: inline-block;
                text-align: center;
                /*border:1px solid red;*/
                width:120px;
                height: 40px;
                margin-left: 30%;
            }
            .section3{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section3 .section3_box{
                width:48%;
                height: 160px;
                float:left;
                /*border:1px solid blue;*/
                margin-right: 6px;
                margin-left: 0px;
                margin-bottom: 10px;
            }
            .section3 .section3_img{
                width:100%;
                height: 120px;
                text-align: center;
            }
            .section3 .section3_title{
                width:100%;
                height: 20px;
                line-height: 20px;
                font-size: 10px;
                /*border:1px solid red;*/
            }
            .section3 .section3_footer{
                width:100%;
                height: 20px;
                /*border:1px solid red;*/
                position:relative;
            }
            .section3 .section3_footer span:nth-of-type(1){
                color:#ccc;margin-left: 8px;
                font-size: 8px;
            }
            .section3 .section3_footer span:nth-of-type(2) a{
                color:#8a6d3b;
                text-align: right;
                position:absolute;
                top:2px;
                right:5px;
                display: none;
            }
            .section4{
                width:100%;
                height: 60px;
                text-align: center;
                /*border:1px solid red;*/
            }
            .section10{
                margin-top:120px;
            }
            .section10 .footer1{
                font-size: 8px;
                margin-top: 10px;
            }
            .section10 .store{
                position:relative;
            }
            .section10 img{
                width:38px;
                height: 38px;
            }
            .section10 .store ul:first-child{
                margin-left: 26px;
            }
            .section10 .store  a{
                display: none;
            }
            .section10 div{
                float:left;margin-left: 8px;
            }
            .section10 .taobao img{
                margin-top: -25px;
            }
            .section10 .pinduoduo img{
                margin-top: -10px;
                margin-right: 10px;
            }
            .section10 .weixin img{
                margin-top: -10px;
            }
        }

    </style>
    <style type="text/css">
        body {
            /* min-height: 2000px; */
            /*padding-top: 70px;*/
            /* padding-bottom: 70px; */
            /* padding-right: -20px; */
            height: auto;

        }
        .header{
            width:100%;
            height: 80px;

        }
        .nav_img{
            /*margin-left: 50px;*/
            float:left;
            width:260px;
            height: 70px;
        }
        .nav_container{
            float:left;
            /*margin-left: 160px;*/

        }
        .nav_word{
            width:22%;
            height: 35px;
            float:left;
            line-height: 35px;
            text-align: center;
            /*margin-left: 10px;*/
            border-left:1px solid #ccc ;
            margin-top: 20px;
            /* border:1px solid red; */
        }
        .nav_foot{
            float:left;
            /*margin-left: 120px;*/
            line-height: 80px;
        }
        .nav_foot .foot_img{
            width:20px;
            height: 20px;
            margin-left: 8px;
        }
        .active_a{
            margin-left: 250px;
            /*padding-left: 20px;*/
            text-align: center;
        }
        .nav a{
            margin-right: 25px;
        }
        .header_main{
            width:100%;
            height: 48px;
        }
        .header_main{

            position:relative;
        }
        .section2{
            width:73%;
            height: 320px;
            /*border:1px solid red;*/
            margin-top: 20px;
            background-color: #F3F4EF;
        }
        .section2 .section2_left{
            /*border:1px solid red;*/
            width:50%;
            height: 320px;
            position:relative;
        }
        .section2 .section2_left img{
            width:100%;
            height: 320px;
            position:absolute;
            top:0;
            left:0;
        }
        .section2 .section2_right .right_title{
            font-size: 25px;
            color: #8a6d3b;
        }
        .section2 .section2_right .right_time{
            font-size: 15px;
            color: #ccc;
        }
        .section2 .section2_right .right_main{
            font-size: 15px;
            width: 100%;
            height: 180px;
            color: #000;
            text-indent:25px;
            margin-top: 10px;
            /*border:1px solid red;*/
        }
        .section3{
            width:73%;
            height: auto;
            /*border:1px solid red;*/
            margin-top: 20px;
        }
        .section3 .section3_box{
            width:32%;
            height: 280px;
            float:left;
            margin-left: 10px;
            /*border:1px solid blue;*/
        }
        .section3 .section3_img{
            width:100%;
            height: 200px;
            text-align: center;
        }
        .section3 .section3_title{
            width:100%;
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            /*border:1px solid red;*/
        }
        .section3 .section3_footer{
            width:100%;
            height: 30px;
            /*border:1px solid red;*/
            position:relative;
        }
        .section3 .section3_footer span:nth-of-type(1){
            color:#ccc;margin-left: 8px;
        }
        .section3 .section3_footer span:nth-of-type(2) a{
            color:#8a6d3b;
            text-align: right;
            position:absolute;
            top:2px;
            right:5px;
        }
        .section4{
            width:73%;
            height: 60px;
            /*border:1px solid red;*/
        }
        .section10{
            background: url('../images/footer.jpg');
            background-size:100% 100%;
            width:100%;
            height:auto;
            /* margin-top:90px; */

        }
        .section10 .page{
            color:#fff;
            float:left;
            /*margin-left:160px;*/
            margin-top: 20px;
        }
        .section10 .page p{
            padding-bottom: 25px;
            padding-top: 18px;
        }
        .section10 .page ul li a{
            color:#fff;
            font-size: 16px;

        }
        .section10 .store{
            color:#fff;
            /*margin-left:360px;*/
            margin-top: 38px;
            width:300px;
            float:left;
            height: auto;
        }
        .section10 img{
            width:46px;height: 46px;
        }
        .section10 .store p{
            padding-bottom: 8px;
        }
        .section10 .contact{
            color:#fff;
            /*float:left;*/
            /*margin-left:80px;*/
            margin-top: 50px;
        }
        .section10 .contact img{
            width:38px;height: 35px;
        }
        .footer1{
            color:#fff;
        }
        .section10 .taobao{
            margin-top: 15px;
        }
        .taobao img{
            margin-top: 10px;
        }
        .taobao *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo *{
            vertical-align: middle;
            color: #fff;
        }
        .pinduoduo img{
            margin-left: 10px;
        }
        .weixin *{
            vertical-align: middle;
            color: #fff;
        }
        @media screen and (max-width:768px) {
            .active_a {
                margin-left: 0px;
                width: 100%;
                /*padding-left: 20px;*/
                text-align: left;
                /* height:200px !important; */
            }

            .header {
                width: 100%;
                height: 180px;
            }
            .section2{
                width:100%;
                height: 400px;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section2 .section2_left{
                /*border:1px solid red;*/
                width:100%;
                height: 200px;
                position:relative;
            }
            .section2 .section2_left img{
                width:100%;
                height: 200px;
                position:absolute;
                top:0;
                left:0;
            }
            .section2 .section2_right .right_title{
                font-size: 12px;
                color: #8a6d3b;
                text-align: center;
                margin-top: 10px;
            }
            .section2 .section2_right .right_time{
                font-size: 8px;
                text-align: center;
                color: #ccc;
            }
            .section2 .section2_right .right_main{
                font-size: 10px;
                width: 100%;
                height: 100px;
                color: #000;
                text-indent:25px;
                margin-top: 10px;
                /*border:1px solid red;*/
            }
            .section2 .section2_right .right_img{
                display: inline-block;
                text-align: center;
                /*border:1px solid red;*/
                width:120px;
                height: 40px;
                margin-left: 30%;
            }
            .section3{
                width:100%;
                height: auto;
                /*border:1px solid red;*/
                margin-top: 20px;
            }
            .section3 .section3_box{
                width:48%;
                height: 160px;
                float:left;
                /*border:1px solid blue;*/
                margin-right: 6px;
                margin-left: 0px;
                margin-bottom: 10px;
            }
            .section3 .section3_img{
                width:100%;
                height: 120px;
                text-align: center;
            }
            .section3 .section3_title{
                width:100%;
                height: 20px;
                line-height: 20px;
                font-size: 10px;
                /*border:1px solid red;*/
            }
            .section3 .section3_footer{
                width:100%;
                height: 20px;
                /*border:1px solid red;*/
                position:relative;
            }
            .section3 .section3_footer span:nth-of-type(1){
                color:#ccc;margin-left: 8px;
                font-size: 8px;
            }
            .section3 .section3_footer span:nth-of-type(2) a{
                color:#8a6d3b;
                text-align: right;
                position:absolute;
                top:2px;
                right:5px;
                display: none;
            }
            .section4{
                width:100%;
                height: 60px;
                text-align: center;
                /*border:1px solid red;*/
            }
            .section10{
                margin-top:120px;
            }
            .section10 .footer1{
                font-size: 8px;
                margin-top: 10px;
            }
            .section10 .store{
                position:relative;
            }
            .section10 img{
                width:38px;
                height: 38px;
            }
            .section10 .store ul:first-child{
                margin-left: 26px;
            }
            .section10 .store  a{
                display: none;
            }
            .section10 div{
                float:left;margin-left: 8px;
            }
            .section10 .taobao img{
                margin-top: -25px;
            }
            .section10 .pinduoduo img{
                margin-top: -10px;
                margin-right: 10px;
            }
            .section10 .weixin img{
                margin-top: -10px;
            }
        }

    </style>
</head>
<body>

@include("frontend.module.myheader")
<!--section1 start-->
<div class="container-fluid section1">
    <img class="img-responsive center-block" src="{{$datas[1]["img"][0]}}">
</div>
<!--section1 end-->
<!--section2 start-->
<div class="container-fluid ">
    <div class="section2 row center-block">
        <div class="section2_left col-md-6 ">
            <img class="img-responsive center-block" src="{{$datas[2]["img"][0]}}">
        </div>
        <div class="section2_right col-md-6">
            <div class="right_title">{{$datas[2]['word'][0]}}</div>
            <div class="right_time">{{$datas[2]['word'][1]}}</div>
            <div class="right_main">
                <div>{{$datas[2]['word'][2]}}
                </div>
                <div>{{$datas[2]['word'][3]}}</div>
            </div>
            <div class="right_img">
                <a href="{{url($datas[2]['link'][0])}}"><img class="img-responsive " src="{{URL::asset('images/frontend/xiangqing.png')}}"></a>
            </div>
        </div>
    </div>
</div>
<!--section2 end-->
<!--section3 start-->
<div class="container-fluid">
    <div class="section3 center-block">
        @foreach ($data as $user)
            <div class="section3_box">
                <img class="img-responsive section3_img center-block" src="{{storage_image_url($user->thumb)}}">
                <div class="section3_title"> {{$user->title}}</div>
                <div class="section3_footer"><span>{{$user->keywords}}</span>
                    <span><a href="article/show/2/2/{{$user->id}}">查看详情</a></span>
                </div>
            </div>
        @endforeach
    </div>

</div>
<!--section3 end-->
<!--section4 start-->
<div class="container-fluid">
    <div class="section4 center-block">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{$data->links()}}
            </ul>
        </nav>
    </div>
</div>
<!-- <div id="paginate-render"-->
@include("frontend.module.myfooter")
<!--section5 end-->
<script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>
<!--<script src="../static/verdors/swiper-4.5.0/dist/js/swiper.min.js"></script>-->
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{URL::asset('vendor/js/ie10-viewport-bug-workaround.js')}}"></script>
<script>
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var pageDiv = document.getElementById("pageHide");
        var contactDiv = document.getElementById("contactHide");
        var logo = document.getElementById("logo");
        logo.style.display="none";
        if(width<=768){
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
            // console.log(word[0])
            logo.style.display="block";
            $(".header").css("display","none");
            $(".section1").css("display","none");
            console.log(cWidth)

        }else{
            pageDiv.style.display="block";
            contactDiv.style.display = "block";
        }
    }
</script>
<script src="../../../../js/myheader.js"></script>
</body>
</html>