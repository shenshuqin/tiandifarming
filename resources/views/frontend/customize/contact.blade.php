<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!--<link href="../static/common/css/index.css" rel="stylesheet">-->
    {{--<link href="{{URL::asset('css/contact.css')}}" rel="stylesheet">--}}
    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/js/ie8-responsive-file-warning.js')}}></script><![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="../static/verdors/html5shiv/html5shiv.min.js"></script>
    <script src="../static/verdors/respond/respond.min.js"></script>
    <![endif]-->

    {{--<style>--}}
        {{--.section2 div:nth-of-type(1){--}}
            {{--font-size:25px;--}}
            {{--font-weight: bold;--}}
            {{--margin-top: 50px;--}}
            {{--letter-spacing: 2px;--}}
        {{--}--}}
        {{--.section2 div:nth-of-type(2){--}}
            {{--width:35%;--}}
            {{--height: 60px;--}}
            {{--/* border:1px solid red; */--}}
            {{--margin: 10px auto;--}}
            {{--line-height: 20px;--}}
        {{--}--}}
        {{--.section2 div:nth-of-type(3){--}}
            {{--font-size: 16px;--}}
        {{--}--}}
        {{--.section2 div:nth-of-type(4){--}}
            {{--font-size:28px;--}}
            {{--font-weight: bold;--}}
        {{--}--}}
        {{--.section2 div:nth-of-type(5){--}}
            {{--margin-top: 30px;--}}
        {{--}--}}
        {{--/* .demo{width:850px;margin:20px auto;}--}}
        {{--#l-map{height:400px;width:600px;float:left;border:1px solid #bcbcbc;} */--}}
        {{--html,body{margin:0;padding:0;}--}}
        {{--.iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}--}}
        {{--.iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}--}}
        {{--.section3{--}}
            {{--width:100%;--}}
            {{--height: 460px;--}}
            {{--margin-top: 50px;--}}
            {{--/*border:1px solid blue;*/--}}
        {{--}--}}
        {{--#container1{--}}
            {{--width:450px;height:400px;--}}
            {{--/*margin-left: 30px;*/--}}
            {{--/*border:1px solid red;*/--}}
        {{--}--}}
        {{--#if1,if2{--}}
            {{--display: inline-block;--}}
        {{--}--}}
        {{--.section3_left{--}}
            {{--/*border:1px solid red;*/--}}
            {{--padding-left: 160px;--}}
        {{--}--}}

        {{--.section3_right{--}}
            {{--/*border:1px solid red;*/--}}
            {{--padding-left: 100px;--}}
        {{--}--}}
        {{--.section3_left .if1_pc{--}}
            {{--margin-left: 100px;--}}
            {{--/*border:1px solid blue;*/--}}
        {{--}--}}
        {{--.section4{--}}
            {{--width:100%;--}}
            {{--height:160px;--}}
            {{--/*border: 1px solid red;*/--}}

        {{--}--}}
        {{--.section4 .box{--}}
            {{--border:1px solid #ccc;--}}
            {{--width:20%;--}}
            {{--height:80px;--}}
            {{--float:left;--}}
            {{--margin-left: 30px;--}}
            {{--margin-top: 30px;--}}
            {{--/*border:1px solid red;*/--}}
        {{--}--}}
        {{--.section4 .box:nth-of-type(1){--}}
            {{--margin-left: 17%;--}}
        {{--}--}}
        {{--.section4 .box .box_img,.box_word{--}}
            {{--float:left;--}}
        {{--}--}}
        {{--.section4 .box .box_img{--}}
            {{--/*border:1px solid red;*/--}}
            {{--margin-top: 20px;--}}
            {{--margin-left: 20%;--}}
        {{--}--}}
        {{--.section4 .box .box_word{--}}
            {{--/*border:1px solid red;*/--}}
            {{--margin-top: 20px;--}}
            {{--margin-left: 10%;--}}
        {{--}--}}
        {{--@media screen and (max-width:1600px) {--}}

            {{--.section4 .box:nth-of-type(1){--}}
                {{--margin-left: 23%;--}}
            {{--}--}}
        {{--}--}}
        {{--@media screen and (max-width:1366px) {--}}
            {{--.section3_left{--}}
                {{--/*border:1px solid red;*/--}}
                {{--padding-left: 4%;--}}
            {{--}--}}

            {{--.section3_right{--}}
                {{--/*border:1px solid red;*/--}}
                {{--padding-left: 2%;--}}
            {{--}--}}
            {{--.section3_left .if1_pc{--}}
                {{--margin-left: 100px;--}}
                {{--border:1px solid blue;--}}
            {{--}--}}
            {{--.section4 .box:nth-of-type(1){--}}
                {{--margin-left: 18%;--}}
            {{--}--}}
        {{--}--}}

        {{--@media screen and (max-width:768px) {--}}
            {{--.section2 div:nth-of-type(1) {--}}
                {{--font-size: 18px;--}}
            {{--}--}}

            {{--.section2 div:nth-of-type(2) {--}}
                {{--font-size: 10px;--}}
                {{--width: 100%;--}}
                {{--height: 40px;--}}
                {{--/*border:1px solid red;*/--}}
            {{--}--}}

            {{--.section2 div:nth-of-type(5) {--}}
                {{--font-size: 10px;--}}
                {{--width: 100%;--}}
                {{--height: 40px;--}}
                {{--margin-top: 10px;--}}
                {{--/*border:1px solid red;*/--}}
            {{--}--}}

            {{--.section3 {--}}
                {{--width: 100%;--}}
                {{--height: 750px;--}}
                {{--/*border:1px solid red;*/--}}
                {{--padding: 0px;--}}
                {{--margin: 0px;--}}
            {{--}--}}
            {{--.section3_left{--}}
                {{--/*border:1px solid red;*/--}}
                {{--padding-left: 2%;--}}
                {{--padding-right: 2%;--}}
            {{--}--}}
            {{--#if1_mobile{--}}
                {{--margin: 0 auto;--}}
            {{--}--}}
            {{--.section3_right{--}}
                {{--padding-left: 2%;--}}
                {{--padding-right: 2%;--}}
            {{--}--}}
            {{--#if2_mobile{--}}
                {{--margin: 0 auto;--}}
            {{--}--}}
            {{--.section4{--}}
                {{--width:100%;--}}
                {{--height: 400px;--}}
                {{--/*border: 1px solid red;*/--}}
            {{--}--}}
            {{--.section4 .box {--}}
                {{--width: 80%;--}}
                {{--height: 80px;--}}
                {{--border: 1px solid #ccc;--}}
                {{--margin-left: 30px;--}}
                {{--margin-bottom: 20px;--}}
            {{--}--}}

            {{--.section4 .box:nth-of-type(1) {--}}
                {{--margin-left: 30px;--}}
            {{--}--}}

            {{--/*.section3 .section3_left #container1 iframe{*/--}}
            {{--/*width:100px !important;*/--}}
            {{--/*height:200px  !important;*/--}}
            {{--/*}*/--}}
        {{--}--}}
    {{--</style>--}}
    <style>
        .section2 div:nth-of-type(1){
            font-size:25px;
            font-weight: bold;
            margin-top: 50px;
            letter-spacing: 2px;
        }
        .section2 div:nth-of-type(2){
            width:35%;
            height: 60px;
            /* border:1px solid red; */
            margin: 10px auto;
            line-height: 20px;
        }
        .section2 div:nth-of-type(3){
            font-size: 16px;
        }
        .section2 div:nth-of-type(4){
            font-size:28px;
            font-weight: bold;
        }
        .section2 div:nth-of-type(5){
            margin-top: 30px;
        }
        /* .demo{width:850px;margin:20px auto;}
        #l-map{height:400px;width:600px;float:left;border:1px solid #bcbcbc;} */
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
        .section3{
            width:100%;
            height: 460px;
            margin-top: 50px;
            /*border:1px solid blue;*/
        }
        #container1{
            width:450px;height:400px;
            /*margin-left: 30px;*/
            /*border:1px solid red;*/
        }
        #if1,if2{
            display: inline-block;
        }
        .section3_left{
            /*border:1px solid red;*/
            padding-left: 160px;
        }

        .section3_right{
            /*border:1px solid red;*/
            padding-left: 100px;
        }
        .section3_left .if1_pc{
            margin-left: 100px;
            /*border:1px solid blue;*/
        }
        .section4{
            width:100%;
            height:160px;
            /*border: 1px solid red;*/

        }
        .section4 .box{
            border:1px solid #ccc;
            width:20%;
            height:80px;
            float:left;
            margin-left: 30px;
            margin-top: 30px;
            /*border:1px solid red;*/
        }
        .section4 .box:nth-of-type(1){
            margin-left: 17%;
        }
        .section4 .box .box_img,.box_word{
            float:left;
        }
        .section4 .box .box_img{
            /*border:1px solid red;*/
            margin-top: 20px;
            margin-left: 20%;
        }
        .section4 .box .box_word{
            /*border:1px solid red;*/
            margin-top: 20px;
            margin-left: 10%;
        }
        @media screen and (max-width:1600px) {

            .section4 .box:nth-of-type(1){
                margin-left: 23%;
            }
        }
        @media screen and (max-width:1366px) {
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 4%;
            }

            .section3_right{
                /*border:1px solid red;*/
                padding-left: 2%;
            }
            .section3_left .if1_pc{
                margin-left: 100px;
                border:1px solid blue;
            }
            .section4 .box:nth-of-type(1){
                margin-left: 18%;
            }
        }
        @media srceen and (max-width:1152px){
            .section4{
                width:100%;
                height:160px;
                /*border: 1px solid red;*/

            }
            .section4 .box{
                /*border:1px solid #ccc;*/
                width:35%;
                height:80px;
                float:left;
                margin-left: 30px;
                margin-top: 30px;
                /*border:1px solid red;*/
            }
            .section4 .box:nth-of-type(1){
                margin-left: 17%;
            }
            .section4 .box .box_img,.box_word{
                float:left;
            }
            .section4 .box .box_img{
                /*border:1px solid red;*/
                margin-top: 20px;
                margin-left: 20%;
            }
            .section4 .box .box_word{
                /*border:1px solid red;*/
                margin-top: 20px;
                margin-left: 10%;
            }
        }
        @media screen and (max-width:768px) {
            .section2 div:nth-of-type(1) {
                font-size: 18px;
            }

            .section2 div:nth-of-type(2) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                /*border:1px solid red;*/
            }

            .section2 div:nth-of-type(5) {
                font-size: 10px;
                width: 100%;
                height: 40px;
                margin-top: 10px;
                /*border:1px solid red;*/
            }

            .section3 {
                width: 100%;
                height: 750px;
                /*border:1px solid red;*/
                padding: 0px;
                margin: 0px;
            }
            .section3_left{
                /*border:1px solid red;*/
                padding-left: 2%;
                padding-right: 2%;
            }
            #if1_mobile{
                margin: 0 auto;
            }
            .section3_right{
                padding-left: 2%;
                padding-right: 2%;
            }
            #if2_mobile{
                margin: 0 auto;
            }
            .section4{
                width:100%;
                height: 400px;
                /*border: 1px solid red;*/
            }
            .section4 .box {
                width: 80%;
                height: 80px;
                border: 1px solid #ccc;
                margin-left: 30px;
                margin-bottom: 20px;
            }

            .section4 .box:nth-of-type(1) {
                margin-left: 30px;
            }

        }
    </style>

</head>
<body>
            @include("frontend.module.myheader")
            <!-- section1 start -->
            <div class="container-fluid section1">
                    <img class="img-responsive center-block" src="{{$data[1]["img"][0]}}">
            </div>
            <!-- section1 end -->


            <!-- section2 start -->
            <div class="container-fluid section2 text-center">
                <div>{{$data[2]["word"][0]}}</div>
                <div>{{$data[2]["word"][1]}}<br>

                </div>
                <div>{{$data[2]["word"][2]}}</div>
                <div>{{$data[2]["word"][3]}}</div>
                <div>{{$data[2]["word"][4]}}</div>
                </div>
            <!-- section2 end -->
            <!-- section3 start -->
            <div class="container-fluid section3 ">
                <div class="row">
                    <div class="section3_left col-md-5 col-md-offset-1">
            <div  id="container1 ">
                <!--<div id="map1"></div>-->
                <iframe id="if1_pc"  width="450" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/U5J_Fb"></iframe>
                <iframe id="if1_mobile" width="334" height="365" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/jPJ_Fb"></iframe>
            </div>
            </div>
            <div class="section3_right col-md-5">
                    <div  id="container2" >
                        <!--<div id="map2"></div>-->
                        <iframe id="if2_pc" width="450" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/a-J_Fb"></iframe>
                        <iframe id="if2_mobile" width="334" height="365" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://j.map.baidu.com/s/p28_Fb"></iframe></iframe>

                    </div>
            </div>
            </div>
            </div>
            <!-- section3 end -->
    <!--section4 start-->
<div class="container-fluid section4">
    <div class="row">
        <div class="box col-md-4 ">
            <div class="box_img">
                <img class="foot_img" src="{{$data[3]["img"][0]}}">
            </div>
            <div class="box_word">
                <p>{{$data[3]["word"][0]}}<br>
                    {{$data[3]["word"][1]}}</p>
            </div>
        </div>
        <div class="box col-md-4">
            <div class="box_img">
                <img class="foot_img" src="{{$data[3]["img"][1]}}">
            </div>
            <div class="box_word">
                <p>{{$data[3]["word"][2]}}<br>
                    {{$data[3]["word"][3]}}</p>
            </div>
        </div>
        <div class="box col-md-4">
            <div class="box_img">
                <img class="foot_img" src="{{$data[3]["img"][2]}}">
            </div>
            <div class="box_word">
                <p>{{$data[3]["word"][4]}}<br>
                    {{$data[3]["word"][5]}}</p>
            </div>
        </div>
    </div>
</div>

@include("frontend.module.myfooter")
           
</body>
<script src="../../../../vendor/jQuery/jquery-2.2.3.min.js"></script>
<!--<script src="../static/verdors/swiper-4.5.0/dist/js/swiper.min.js"></script>-->
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="../../../../vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{URL::asset('js/ie10-viewport-bug-workaround.js')}}"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

<script type="text/javascript">
    window.onload=function(){
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var pageDiv = document.getElementById("pageHide");
        var contactDiv = document.getElementById("contactHide");
        var logo = document.getElementById("logo");
        $("#if1_mobile,#if2_mobile").css("display","none");

        logo.style.display="none";
        console.log(width);
        if(width<=768){

            // console.log("00")
            $("#if1_mobile,#if2_mobile").css("display","block");
            $("#if1_pc,#if2_pc").css("display","none");
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
            // console.log(word[0])
            logo.style.display="block";
            $(".header").css("display","none");
            console.log(width);

        }else{
            pageDiv.style.display="block";
            contactDiv.style.display = "block";
        }

    }
</script>
<script src="../../../../js/myheader.js"></script>
</html>