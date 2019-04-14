<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enterprise</title>
    <link rel="stylesheet" href="../../../../vendor/font/iconfont.css">
    <!-- Bootstrap core CSS -->
    <link href="../../../../vendor/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    <link href="../../../../css/Normalize/Normalize.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../static/common/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="../static/common/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../static/common/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->
    <style>
        .section2 .section2_title{
            font-size: 25px;
            width:20%;
            height: 60px;
            line-height: 60px;
            /*border:1px solid red;*/
            letter-spacing: 2px;
            color: #8a6d3b;
        }
        .section2 .section2_content{
            width:60%;
            height: 200px;
            /*border:1px solid red;*/
            margin-top: 20px;
            text-indent:25px;
            font-size: 14px;
            line-height: 20px;
            color:#979797;
        }
        .section3{
            width:100%;
            height: 350px;
            position:relative;
        }
        .section3 .section3_main{
            color:#fff;
            width:50%;
            height: 300px;
            position:absolute;
            top:10%;
            right:5%;
        }
        .section3 .section3_main div:nth-of-type(1){
            width:100%;
            height: 40px;
            line-height: 40px;
            font-size: 20px;
            /*border:1px solid red;*/
        }
        .section3 .section3_main div:nth-of-type(2){
            width:68%;
            height: 160px;
            font-size: 15px;
            /*border:1px solid red;*/
            margin-top: 20px;
        }
        .section3 .section3_main div:nth-of-type(3){
            width:68%;
            height: 60px;
            font-size: 16px;
            /*border:1px solid red;*/
            margin-top: 20px;
        }
        .section4{
            width:100%;
            height: 1100px;
            background-color: #F7F7F7;
            margin-top: 20px;
        }
        .section4 .section4_title{
            font-size: 25px;
            color: #8a6d3b;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .section4 .section4_top{
            width:67%;
            height: 460px;
            margin-top: 30px;
            position: relative;
            /*border:1px solid red;*/
        }
        .section4 .section4_top .top_img{
            position:absolute;
            top:0;
            left: 0;
            width:68%;
            height: 460px;
        }
        .section4 .section4_top .top_right{
            color:#fff;
            width:28%;
            height: 200px;
            position:absolute;
            top:20%;
            right: 2%;
        }
        .section4 .section4_bottom{
            width:67%;
            height: 460px;
            margin-top: 30px;
            position: relative;
        }
        .section4 .section4_bottom .bottom_img{
            position:absolute;
            top:0;
            left: 0;
            width:68%;
            height: 460px;
        }
        .section4 .section4_bottom .bottom_right{
            color:#fff;
            width:28%;
            height: 200px;
            position:absolute;
            top:20%;
            right: 2%;
        }
        .section5{
            width:100%;
            height: 700px;
            /*border:1px solid red;*/
        }
        .section5 .section5_title{
            font-size: 25px;
            color: #8a6d3b;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .section5 .section5_word{
            font-size: 16px;
            margin-top: 10px;
        }
        .section5 .table{
            /*border:1px solid red;*/
            width:65%;
            margin-top: 20px;
            padding-left: 2%;
        }
        .section5 .table img{
            width:100%;
            height:250px;
        }
        .section5 .table .table_box1{
            width:100%;
            height: 248px;
            font-size: 20px;
            text-align: center;
            line-height:248px;
            color:#fff;
            background-color: #000;
        }

        .section5 .table .table_box2{
            width:100%;
            height:248px;
            font-size: 20px;
            text-align: center;
            line-height:248px;
            color:#8a6d3b;
            background-color: #F7F7F7;
        }
        .section6 .section6_title{
            font-size: 25px;
            margin-bottom: 10px;
            color: #8a6d3b;
        }
        .section6 .table{
            /*border:1px solid red;*/
            width:65%;
            margin-top: 20px;
            padding-left: 5%;
        }
        .section6 .table .table_box{
            width:100%;
            height: 280px;
            /*border:1px solid red;*/
        }
        .section6 .table .table_box img{
            width:92%;
            height: 260px;
        }
        @media screen and (max-width:1600px){
            .section4 .section4_top{
                width:67%;
                height: 420px;
                margin-top: 30px;
                position: relative;
                /*border:1px solid red;*/
            }
            .section4 .section4_top .top_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 420px;
            }
            .section4 .section4_top .top_right{
                color:#fff;
                width:28%;
                height: 200px;
                position:absolute;
                top:20%;
                right: 2%;
            }
            .section4 .section4_bottom{
                width:67%;
                height: 420px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_bottom .bottom_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 420px;
            }
            .section4 .section4_bottom .bottom_right{
                color:#fff;
                width:28%;
                height: 200px;
                position:absolute;
                top:20%;
                right: 2%;
            }
            .section6 .table .table_box img{
                width:92%;
                height: 220px;
            }
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
            .section2 .section2_title{
                font-size: 10px;
                width:50%;
                height: 50px;
                line-height: 50px;
                /*border:1px solid red;*/
            }
            .section2 .section2_img{
                width:20%;
                height: auto;
            }
            .section2 .section2_content{
                width:100%;
                height: 300px;
                /*border:1px solid red;*/
                font-size: 8px;
            }
            .section3{
                width:100%;
                height: 200px;
                position:relative;
            }
            .section3 .section3_main{
                color:#fff;
                width:40%;
                height: 200px;
                position:absolute;
                top:10%;
                right:10%;
            }
            .section3 .section3_main div:nth-of-type(1){
                width:100%;
                height: 20px;
                line-height: 20px;
                font-size: 12px;
                /*border:1px solid red;*/
            }
            .section3 .section3_main div:nth-of-type(2){
                width:100%;
                height: 100px;
                font-size: 8px;
                /*border:1px solid red;*/
                margin-top: 10px;
            }
            .section3 .section3_main div:nth-of-type(3){
                width:68%;
                height: 20px;
                font-size: 10px;
                /*border:1px solid red;*/
                margin-top: 10px;
            }
            .section4{
                width:100%;
                height: 600px;
                background-color: #F7F7F7;
                margin-top: 20px;
            }
            .section4 .section4_title{
                font-size: 18px;
                color: #8a6d3b;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .section4 .section4_top{
                width:72%;
                height: 200px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_top .top_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 200px;
            }
            .section4 .section4_top .top_right{
                color:#fff;
                width:28%;
                height: 210px;
                font-size:9px;
                position:absolute;
                /*border:1px solid red;*/
                top:20%;
                right: 2%;
            }
            .section4 .section4_bottom{
                width:72%;
                height: 200px;
                margin-top: 30px;
                position: relative;
            }
            .section4 .section4_bottom .bottom_img{
                position:absolute;
                top:0;
                left: 0;
                width:68%;
                height: 200px;
            }
            .section4 .section4_bottom .bottom_right{
                color:#fff;
                width:28%;
                height: 210px;
                font-size: 9px;
                position:absolute;
                top:20%;
                right: 2%;
            }
            .section5{
                width:100%;
                height: 300px;
                margin-top: 20px;
                /*border:1px solid red;*/
            }
            .section5 .section5_title{
                font-size: 22px;
                color: #8a6d3b;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .section5 .section5_word{
                font-size: 10px;
                margin-top: 10px;
            }
            .section5 .table{
                /*border:1px solid red;*/
                width:98%;
                margin-top: 20px;
            }
            .section5 .table img{
                width:80px;
                height:80px;
            }
            .section5 .table .table_box1{
                width:80px;
                height: 80px;
                font-size: 8px;
                text-align: center;
                line-height: 80px;
                color:#fff;
                background-color: #000;
            }
            .section5 .table .table_box2{
                width:80px;
                height:80px;
                font-size: 8px;
                text-align: center;
                line-height: 80px;
                color:#8a6d3b;
                background-color: #F7F7F7;
            }
            .section6 .section6_title{
                font-size: 25px;
                margin-bottom: 10px;
                color: #8a6d3b;
            }
            .section6{
                /*border:1px solid red;*/
                width:100%;
                height: auto;
            }
            .section6 .table{
                /*border:1px solid red;*/
                width:90%;
                margin-top: 30px;
            }
            .section6 .table .table_box{
                width:100px;
                height: 100px;
                /*border:1px solid red;*/
            }
            .section6 .table .table_box img{
                width:95%;
                height: 90px;
                /*border:1px solid red;*/
            }
        }
    </style>

</head>
<body>
@include("frontend.module.myheader")
<!--section1 start-->
<div class="container-fluid section1">
    {{--<img class="img-responsive center-block" src="../../../../images/frontend/e1.jpg">--}}
    <img class="img-responsive center-block" src="{{$data[0]["img"][0]}}">
</div>
<!--section1 end-->
<!--section2 start-->
<div class="container-fluid section2">
    {{--<div class="section2_title text-center center-block">关于天地农耕</div>--}}
    <div class="section2_title text-center center-block">{{$data[0]["word"][0]}}</div>
    <div class="section2_img center-block">
        <img class="img-responsive center-block" src="../../../../images/frontend/line5.png">
    </div>
    <div class="section2_content center-block">
        <div>{!! $data[0]["word"][1] !!}</div>
        {{--<div>{!!$data[0]["word"][2]!!}</div>--}}
        {{--<div>{!!$data[0]["word"][3]!!}</div>--}}
           </div>
</div>
<!--section2 end-->
<!--section3 start-->
<div class="container-fluid">
    {{--<div class="section3" style="background: url('../../../../images/frontend/e2.jpg');background-size: 100% 100%;">--}}
    <div class="section3" style="background: url('{{URL::asset($data[0]["img"][1])}}');background-size: 100% 100%;">
        <div class="section3_main">
            <div>{{$data[0]["word"][2]}}</div>
            <div>{!! $data[0]["word"][3] !!}</div>
            <div>{{$data[0]["word"][4]}}</div>
        </div>
    </div>

</div>
<!--section3 end-->
<!--section4 start-->
<div class="container-fluid">
    <div class="section4">
        <div class="section4_title text-center">{{$data[1]["word"][0]}}</div>
        <div class="section4_img center-block">
            <img class="img-responsive center-block" src="../../../../images/frontend/line5.png">
        </div>
        {{--<div class="section4_top center-block" style="background: url('../../../../images/frontend/e3.jpg');background-size: 100% 100%">--}}
        <div class="section4_top center-block" style="background: url('{{URL::asset($data[1]["img"][0])}}');background-size: 100% 100%">
            <div class="top_left">
                {{--<img class="img-responsive center-block top_img" src="../../../../images/frontend/e4.jpg">--}}
                <img class="img-responsive center-block top_img" src="{{$data[1]["img"][1]}}">
            </div>
            <div class="top_right">
                {!! $data[1]["word"][1] !!}
            </div>
        </div>
        <div class="section4_bottom center-block" style="background: url('{{URL::asset($data[1]["img"][2])}}');background-size: 100% 100%">
            <div class="bottom_left">
                <img class="img-responsive center-block bottom_img" src="../../../../images/frontend/e6.jpg">
                <img class="img-responsive center-block bottom_img" src="{{$data[1]["img"][3]}}">
            </div>
            <div class="bottom_right">
                {!! $data[1]["word"][2] !!}
            </div>
        </div>
    </div>
</div>
<!--section4 end-->
<!--section5 start-->
<div class="container-fluid">
    <div class="section5">
        <div class="section5_title text-center">{{$data[2]["word"][0]}}</div>
        <div class="section5_img center-block">
            <img class="img-responsive center-block" src="../../../../images/frontend/line5.png">
        </div>
        <div class="section5_word text-center">
            {{$data[2]["word"][1]}}
        </div>
        <div class="table center-block">
            <table>
            <tr>
                <td>
                    {{--<img class="img-responsive center-block" src="../../../../images/frontend/1-3.jpg">--}}
                    <img class="img-responsive center-block" src="{{$data[2]["img"][0]}}">
                </td>
                <td>
                    <div class="table_box1">
                        <p>{{$data[2]["word"][2]}}</p>
                    </div>
                </td>
                <td>
                    <img class="img-responsive center-block" src="{{$data[2]["img"][1]}}">
                </td>
                <td>
                    <div class="table_box2">
                        <p>{{$data[2]["word"][3]}}</p>
                    </div>
                </td>
            </tr>
                <tr>
                    <td>
                        <div class="table_box2">
                            <p>{{$data[2]["word"][4]}}</p>
                        </div>
                    </td>
                    <td>
                        <img class="img-responsive center-block" src="{{$data[2]["img"][2]}}">
                    </td>
                    <td>
                        <div class="table_box1">
                            <p>{{$data[2]["word"][4]}}</p>
                        </div>
                    </td>
                    <td>
                        <img class="img-responsive center-block" src="{{$data[2]["img"][3]}}">

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--section5 end-->
<!--section6 start-->
<div class="container-fluid">
    <div class="section6">
        <div class="section6_title text-center">{{$data[3]["word"][0]}}</div>
        <div class="section5_img center-block">
            <img class="img-responsive center-block" src="../../../../images/frontend/line5.png">
        </div>
        <div class="table center-block">
            <table>
                <tr>
                <td>
                    <div class="table_box">
                        <img class="img-responsive center-block" src="{{$data[3]["img"][0]}}">
                    </div>
                </td>
                <td>
                    <div class="table_box">
                        <img class="img-responsive center-block" src="{{$data[3]["img"][1]}}">
                    </div>
                </td>
                <td>
                    <div class="table_box">
                        <img class="img-responsive center-block" src="{{$data[3]["img"][2]}}">
                    </div>
                </td>
            </tr>
                <tr>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data[3]["img"][3]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data[3]["img"][4]}}">
                        </div>
                    </td>
                    <td>
                        <div class="table_box">
                            <img class="img-responsive center-block" src="{{$data[3]["img"][5]}}">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--section6 end-->
@include("frontend.module.myfooter")


<script src="../../../../vendor/jQuery/jquery-2.2.3.min.js"></script>
<!--<script src="../static/verdors/swiper-4.5.0/dist/js/swiper.min.js"></script>-->
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="../../../../vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../static/common/js/ie10-viewport-bug-workaround.js"></script>

<script>
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var pageDiv = document.getElementById("pageHide");
        var contactDiv = document.getElementById("contactHide");
        var logo = document.getElementById("logo");
        logo.style.display="none";
        $(".bds_weixin").hover(function(){
                console.log("00000");
                $(".wechat-share").css("display","block");
            },function(){
                $(".wechat-share").css("display","none");
            }
        );
        $(".bds_weixin").hover(function(){
                console.log("00000");
                $(".wechat-share").css("display","block");
            },function(){
                $(".wechat-share").css("display","none");
            }
        );
        if(width<=768){
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
            // console.log(word[0])
            logo.style.display="block";
            $(".header").css("display","none");
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