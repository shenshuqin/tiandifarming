<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>天地农耕</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/font/iconfont.css')}}">

    <link rel="stylesheet" href="{{URL::asset('vendor/swiper-4.5.0/dist/css/swiper.min.css')}}">
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/dist/css/bootstrap.css')}}" >

    <link href="{{URL::asset('css/index.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/Normalize/Normalize.css')}}" rel="stylesheet">
    <script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/js/ie8-responsive-file-warning.js')}}"></script>
    <![endif]-->
    <script src="{{URL::asset('vendor/js/ie-emulation-modes-warning.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{URL::asset('vendor/html5shiv/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('vendor/respond/respond.min.js')}}"></script>
    <![endif]-->
    <!-- Placed at the end of the document so the pages load faster -->
    {{--<!--<script src="{{URL::asset('vendor/jQuery/jquery-2.2.3.min.js')}}"></script>-->--}}

    {{--<!--<script src="{{URL::asset('vendor/swiper-4.5.0/dist/js/swiper.min.js')}}"></script>-->--}}
    <script src="{{URL::asset('vendor/swiper-4.5.0/dist/js/swiper.min.js')}}"></script>
    {{--<!--<script>window.jQuery || document.write('<script src="{{URL::asset('../../assets/js/vendor/jquery.min.js')}}"><\/script>')</script>-->--}}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {{--<!--<script src="{{URL::asset('vendor/js/ie10-viewport-bug-workaround.js')}}"></script>-->--}}

</head>
<style>
    #myCarousel .carousel-inner .lunbo{
        display: block;
        width:100%;
        height: 100%;
        /*border:1px solid blue;*/
    }
    .secition1 .row .dl{
        margin-top: 30px;
        /*border:1px solid red;*/
    }
    .section1_img{
        width:76px;
        height:76px;
    }
    .section1_word a{
        color:#000;
    }
    .img1_position,.word1_position{
        margin-left: 250px;
    }
    .img3_position,.word3_position{
        margin-right: 250px;
    }
    .secition2{
        border-top:1px solid #ccc;
    }
    .secition2 img{
        margin-top: 20px;
    }
    #swiper2{
        width:480px;
        height: 290px;
        position:relative;
        /*border:1px solid #ccc;*/
        margin-left: 30%;
    }
    #video1,#video2,#video3,#video4{
        width:100%;
        height: 100%;
        object-fit: fill
    }
    #dots{
        position:absolute;
        bottom: 10%;
        left:5%;
    }
    .swiper-button-prev,.swiper-button-next{
        opacity: 0.5;
    }
    #swiper2 .swiper-slide .span{
        width:480px;
        height: 290px;
        position:absolute;
        top:0;
        left:0;

    }
    .iconfont{
        font-size: 60px;
        color: #fff;
        position:absolute;
        width:480px;
        height: 290px;
        opacity: 0.6;
        /*border:1px solid red;*/
        text-align: center;
        line-height: 290px;
    }
    .secition3{
        margin-top: 20px;
        margin-left: 20px;
    }
    .secition3_word{
        width:500px;
        height: 55px;
        /*padding: 8px;*/
        line-height: 25px;
        margin-bottom: 80px;
        padding-top: 10px;
    }
    .section3_left{
        width:46%;
        height: 300px;
        /*border:1px solid red;*/
    }
    .secition3_right{
        margin-left: 30px;
        /*border:1px solid red;*/
    }
    .section4_img{
        width:100%;
        height: 120px;
        /*border:1px solid red;*/
    }
    .secition4{
        margin-top: 8px;
    }
    .secition5 img{
        margin-top: 20px;
    }
    .section6{
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width:100%;
        height: 360px;
        position:relative;
        margin-top: 10px;
    }
    .section6_introduce{
        position:absolute;
        top:10px;
        right: 220px;
        color:#B99C56;
    }.section6_introduce .div1{
         margin-top: 20px;
         width:260px;
         height: 60px;
         text-align: center;
     }
    .div2{
        width:260px;
        height: 60px;
        letter-spacing:9px;
        text-align: center;
    }
    .div3{
        width:280px;
        height: 80px;
    }
    .section6_main .more{
        position: absolute;
        top:60%;
        left:60%;
    }
    .section6_introduce .div1 span:nth-of-type(1){
        font-size: 28px;
        margin-right: 10px;
    }
    .section6 .div2 span:nth-of-type(1){
        margin-right: 10px;
    }
    .section6 .div3 p:nth-of-type(1){
        text-align: center;
    }
    .section7{
        /*width:100%;*/
        height: 500px;
        position: relative;
        margin-top:40px;
    }
    .section7 img {
        width:360px;
        height: 350px;
        position:absolute;
        top:5%;left:38%;
        /*border: 1px solid red;*/
    }
    .section7 .introduce_word01{
        position:absolute;
        top:5%;
        left:23%;
    }
    .section7  .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: right;
        color:#242424;
        font-size:1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7  .introduce_sentence{
        width:220px;
        height:40px;
        color:#7E7E7E;

    }
    .section7 .introduce_word02{
        position:absolute;
        top:35%;
        left:21%;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word03{
        position:absolute;
        top:63%;
        left:25%;
        /*border:1px solid #ccc;*/
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word04{
        position:absolute;
        top:5%;
        left:62%;
        /*border:1px solid #ccc;*/
        /*width:1%;*/
        /*height:100px;*/
    }
    .section7 .introduce_word04 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7 .introduce_word05{
        position:absolute;
        top:33%;
        left:63%;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word05 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section7 .introduce_word06{
        position:absolute;
        top:64%;
        left:57%;
        /*width:220px;*/
        /*height:100px;*/
    }
    .section7 .introduce_word06 .introduce_title{
        /*width:220px;*/
        /*height:20px;*/
        text-align: left;
        color:#242424;
        font-size:1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .section8{
        background-color: #F1F3F4;
        /*width:100%;*/
        height:500px;
    }
    .section8 .section8_left{
        margin-left:280px;
        padding-top:60px;
        padding-left: 50px;
        margin-top: 40px;
        /*float:left;*/
        /*width:500px;height: 500px;*/
        /*border:1px solid red;*/
    }
    .section8 .section8_left p{
        width:300px;height:120px;
        margin-top:30px;line-height: 1.8;
    }
    .section8_right{
        background-color:#8C6238;
        color:#fff;
        /*border:1px solid red;*/
    }
    .section8_right .line4{
        width:80px;
        height:2px;
        background-color: #8C6238;
    }
    .right_container{
        background-color:#8C6238;
        width:760px;
        height:420px;
        margin-top:40px;
        /*border:1px solid red;*/
        /*float:left;*/
    }
    .section8 .species{
        /*float:left;*/
        margin-top: 20px;
    }
    .section8_right .species_img{
        width:200px;
        height:280px;
        /* background-color:red; */
    }
    .section8_right .species_img01{
        width:80px;
        height:2px;
    }
    .section8_right .species_word{
        width:100%;
        height:60px;
        /* border:1px solid red; */
        margin-top:15px;
    }
    .section9 .news_title{
        /*display:flex;*/
        /*justify-content: center; //子元素水平方向居中*/
        /*align-items: center;//子元素垂直方向居中*/
        text-align: center;
        font-size: 24px;
        margin-top: 30px;
    }
    .section9 .news_container {
        margin-top:20px;
        text-align: center;
        /*border: 1px solid blue;*/
        padding-left: 18%;
    }
    .section9 .news_container .news1{
        float:left;
        width:26%;
        height: auto;
        /*border: 1px solid red;*/
    }
    .section9 .news_container .news1_img{
        width:100%;
    }
    .section9 .news_container .news_position{
        margin-left: 330px;
    }
    .news_container .news_title{
        font-size:18px;
        width:350px;
        height:20px;
        margin-left: -40px;
    }
    .news_container .news1 .news_content{
        font-size:16px;
        padding-top:20px;
        padding-bottom: 20px;
        color:#989898;
    }
    #NavTop{
        width:90px;
        height:200px;
        margin-top:50px;
        position:fixed;
        right:0px;top:150px;        /*固定位置,右浮动，距上150px*/
        text-align: center;
        z-index: 1000;
    }
    #NavTop #NavCon .P,.W,.Z,.D {
        text-decoration:none;
        color:#8C6238;
        width:50px;
        height:52px;
        background-color:#fff;
        display:block;
        margin-top:0px;
        margin-left:22px;
        line-height:25px;
        text-align:center;
        font-family:"微软雅黑";
        font-size:12px;
        /* border:1px solid #000; */
        margin-bottom: 2px;
    }
    #NavTop #NavCon div a{
        color:#8C6238;
        text-decoration:none;
    }
    @media screen and (max-width:1680px) {
        #myCarousel{
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            width:100%;
            height: 20%;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner{
            width:100%;
            height: 100%;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner .lunbo{
            display: block;
            width:100%;
            height: 100%;
            /*border:1px solid blue;*/
        }
        .section3_left{
            width:50%;
            height: 300px;
            /*border:1px solid red;*/
            position:relative;
        }
        #swiper2{
            width:460px;
            height: 290px;
            position:relative;
            /*border:1px solid #ccc;*/
            /*margin-left: 20%;*/
            position:absolute;
            top:0px;
            right:2%;
        }
        #video1,#video2,#video3,#video4{
            width:100%;
            height: 100%;
            object-fit: fill
        }
        .section8 .section8_left{
            margin-left:18%;
            padding-top:60px;
            padding-left: 0px;
            margin-top: 40px;
            width:20%;
            /*float:left;*/
            /*width:500px;height: 500px;*/
            /*border:1px solid red;*/
        }
        .section8_right{
            background-color:#8C6238;
            color:#fff;
            width:18%;
            height: auto;
            /*border:1px solid red;*/
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            width:100%;
            /*border: 1px solid blue;*/
            padding-left: 25%;
        }
    }
    @media screen and (max-width:1366px) {
        #myCarousel{
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            width:100%;
            height: 20%;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner{
            width:100%;
            height: 100%;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner .lunbo{
            display: block;
            width:100%;
            height: 100%;
            /*border:1px solid blue;*/
        }
        .section3_left{
            width:50%;
            height: 300px;
            /*border:1px solid red;*/
            position:relative;
        }
        #swiper2{
            width:460px;
            height: 290px;
            position:relative;
            /*border:1px solid #ccc;*/
            /*margin-left: 20%;*/
            position:absolute;
            top:0px;
            right:2%;
        }
        #video1,#video2,#video3,#video4{
            width:100%;
            height: 100%;
            object-fit: fill
        }
        .section8 .section8_left{
            margin-left:15%;
            padding-top:60px;
            padding-left: 0px;
            margin-top: 40px;
            width:20%;
            /*float:left;*/
            /*width:500px;height: 500px;*/
            /*border:1px solid red;*/
        }
        .section8_right{
            background-color:#8C6238;
            color:#fff;
            width:200px;
            height: auto;
            /*border:1px solid red;*/
        }
        .section8_right .line4{
            width:80px;
            height:2px;
            background-color: #8C6238;
        }
        .right_container{
            background-color:#8C6238;
            width:580px;
            height:400px;
            margin-top:40px;
            /*border:1px solid red;*/
            /*float:left;*/
        }
        .section8 .species{
            /*float:left;*/
            margin-top: 20px;
        }
        .section8_right .species_img{
            width:160px;
            height:220px;
            /* background-color:red; */
        }
        .section8_right .species_img01{
            width:80px;
            height:2px;
        }
        .section8_right .species_word{
            width:100%;
            height:60px;
            /* border:1px solid red; */
            margin-top:15px;
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            width:100%;
            /*border: 1px solid blue;*/
            padding-left: 20%;
        }
        .section7{
            /*width:100%;*/
            height: 500px;
            position: relative;
            margin-top:40px;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:360px;
            height: 350px;
            position:absolute;
            top:5%;left:38%;
            /*border: 1px solid red;*/
        }
        .section7 .introduce_word01{
            position:absolute;
            top:5%;
            left:22%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7  .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: right;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7  .introduce_sentence{
            width:220px;
            height:40px;
            color:#7E7E7E;

        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:20%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word03{
            position:absolute;
            top:63%;
            left:22%;
            /*border:1px solid #ccc;*/
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04{
            position:absolute;
            top:5%;
            left:68%;
            /*border:1px solid #ccc;*/
            /*width:1%;*/
            /*height:100px;*/
        }
        .section7 .introduce_word04 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word05{
            position:absolute;
            top:33%;
            left:68%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word05 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section7 .introduce_word06{
            position:absolute;
            top:64%;
            left:62%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word06 .introduce_title{
            /*width:220px;*/
            /*height:20px;*/
            text-align: left;
            color:#242424;
            font-size:1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section9 .news_title{
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
            text-align: center;
            font-size: 24px;
            margin-top: 30px;
        }
        .section9 .news_container {
            margin-top:20px;
            text-align: center;
            /*border: 1px solid blue;*/
            padding-left: 18%;
        }
        .section9 .news_container .news1{
            float:left;
            width:30%;
            height: auto;
            /*border: 1px solid red;*/
        }
        .section9 .news_container .news1_img{
            width:100%;
        }
        .section9 .news_container .news_position{
            margin-left: 330px;
        }
        .news_container .news_title{
            font-size:16px;
            /*-webkit-transform: scale(0.9);*/
            /*-moz-transform: scale(0.9);*/
            /*-o-transform: scale(0.9);*/
            /*transform: scale(0.9);*/
            /*border:1px solid red;*/
            width:300px;
            height:20px;
            text-align: left;
            margin-left: 0px;
            padding: 0px;
        }
        .news_container .news1 .news_content{
            font-size:14px;
            padding-top:20px;
            padding-bottom: 20px;
            color:#989898;
        }
    }
    @media screen and (max-width:1522px){
        .section7 .introduce_word05{
            position:absolute;
            top:33%;
            left:72%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word06{
            position:absolute;
            top:66%;
            left:65%;
            /*width:220px;*/
            /*height:100px;*/
        }
        .section7 .introduce_word02{
            position:absolute;
            top:35%;
            left:18%;
            /*width:220px;*/
            /*height:100px;*/
        }

    }

    @media screen and (max-width:768px){
        .active_a{
            margin-left: 0px;
            width:100%;
            /*padding-left: 20px;*/
            text-align: left;
        }
        #myCarousel{
            margin-top:4px;
            padding:0;
            /*border:0px solid #222;*/
            /*position:relative;*/
            /*top:0;*/
            /*left:0;*/
            width:100%;
            height: 102px;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner{
            width:100%;
            height: 100px;
            /*border:1px solid red;*/
        }
        #myCarousel .carousel-inner .lunbo{
            display: block;
            width:100%;
            height: 100%;
            /*border:1px solid blue;*/
        }
        body {
            min-height: 2000px;
            padding-top: 22px;
        }
        .navbar_bg{
            /*background-color: #009555;*/

        }
        #swiper2{
            width:500px;
            height: 290px;
            position:relative;
            border:1px solid #ccc;
            margin-left: 10%;
            margin-bottom: 20px;
        }
        .section1_img{
            width:46px;
            height:46px;
        }
        .section1_word{
            font-size:6px;
        }
        .section2{
            width:100%;
            height:200px;
            /*border:1px solid red;*/
        }
        .secition2 img{
            width:100%;
            height: 45px;
        }
        .img1_position,.word1_position{
            margin-left: 20px;
        }
        .img3_position,.word3_position{
            margin-right: 20px;
        }
        .section3_left .swiper-container{
            width:260px !important;
            height: 210px !important;
            position:relative;
        }
        #video1,#video2,#video3,#video4{
            width:260px !important;
            height: 210px !important;
            object-fit: fill
        }
        /*.section3 .section3_left{*/
        /*border:1px solid red;*/
        /*width:100%;*/
        /*height: 200px;*/
        /*}*/
        .section3_left .swiper-container .iconfont{
            position:absolute;
            top:0;
            left:0;
            /*border:1px solid red;*/
            text-align: center;
            line-height: 210px;
            width:260px;
        }
        .section3_right{
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }
        .secition3_word{
            width:auto;
            height: 100px;
            font-size: 12px;
        }
        .section5{
            width:100%;
            height:200px;
            /*border:1px solid red;*/
        }
        .secition5 img{
            width:100%;
            height: 45px;
        }
        #xiangqin1{
            text-align: center;
            width:120px;
            height: 40px;
        }
        .section6 {
            width:100%;
            height: 180px;
        }
        .section6_main .more{
            width:60px;
            height: 20px;
        }
        .section6_introduce{
            position:absolute;
            top:5%;
            right: 0%;
            color:#B99C56;
        }.section6_introduce .div1 {
             margin-top: 20px;
             width: 150px;
             height: 26px;
             text-align: center;
         }
        .div2{
            width:160px;
            height: 30px;
            letter-spacing:9px;
            text-align: center;
            font-size: 10px;
        }
        .div3{
            width:160px;
            height: 50px;
            font-size: 8px;
            /*border:1px solid red;*/
        }
        .section6_introduce .div1 span:nth-of-type(1){
            font-size: 12px;
            margin-right: 10px;
        }
        .section6_introduce .div1 span:nth-of-type(2){
            font-size: 8px;
        }
        .section6 .div2 span:nth-of-type(1){
            margin-right: 10px;
        }
        .section6 .div3 p:nth-of-type(1){
            text-align: center;
        }
        .section7{
            width:100%;
            height: 250px;
            position: relative;
            /*display:flex;*/
            /*justify-content: center; //子元素水平方向居中*/
            /*align-items: center;//子元素垂直方向居中*/
        }
        .section7 img {
            width:160px;
            height: 150px;
            position:absolute;
            top:10%;left:25%;
        }
        .section7 .introduce_word01{
            position:absolute;
            top:2%;
            left:4%;
            width:35%;
            height:20%;
            /*border:1px solid red;*/
            padding: 0px;
            margin: 0px;
        }
        .section7 .introduce_title{
            width:100%;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
            height:0px;
            text-align: right;
            color:#242424;
            font-weight: bold;
            font-size:12px;
            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            -o-transform: scale(0.6);
            transform: scale(0.6);
        }
        .section7  .introduce_sentence{
            /*border:1px solid red;*/

            margin-top: 0px;
            width:100%;
            height:100%;
            color:#7E7E7E;
            font-size:12px;
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
        }
        .section7 .introduce_word02{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:38%;
            left:0%;
            width:30%;
            height:20%;
        }
        .section7 .introduce_word03{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:68%;
            left:5%;
            width:35%;
            height:20%;
        }
        .section7 .introduce_word04{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:2%;
            left:60%;
            width:35%;
            height:20%;
        }
        .section7 .introduce_word04 .introduce_title{
            width:100px;
            height:5px;
            text-align: left;
            color:#242424;
            font-size:6px;
            font-weight: bold;
            /*margin-bottom: 5px;*/
            padding: 0px;
            margin: 0px;

        }
        .section7  .introduce_sentence{
            width:100%;
            height:100%;
            color:#7E7E7E;
        }
        .section7 .introduce_word05{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:40%;
            left:64%;
            width:30%;
            height:20%;
        }
        .section7 .introduce_word05 .introduce_title{
            padding: 0px;
            margin: 0px;
            width:100px;
            height:5px;
            text-align: left;
            color:#242424;
            font-size:6px;
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        .section7 .introduce_word06{
            padding: 0px;
            margin: 0px;
            position:absolute;
            top:70%;
            left:56%;
            width:35%;
            height:20%;
        }
        .section7 .introduce_word06 .introduce_title{
            padding: 0px;
            margin: 0px;
            width:100px;
            height:5px;
            text-align: left;
            color:#242424;
            font-size:6px;
            font-weight: bold;
            /*margin-bottom: 5px;*/
        }
        /*.section8{*/
        /*background-color: #F1F3F4;*/
        /*width:100%;*/
        /*height:auto;*/
        /*}*/
        .section8{
            /*position:relative;*/
            width:100%;

            background-color: #F1F3F4;
            height: 690px;
            margin: 0px;
            padding: 0px;
            /*border:1px solid red;*/
        }
        .section8 .section8_left{
            text-align: center;
            background-color: #F1F3F4;
            width:80%;height: 350px;
            margin-left: 40px;
            float:left;
            /*border:1px solid red;*/
        }
        .section8_left .img1{
            /*padding-left: 50px;*/
        }
        .section8 .img{
            text-align: center;
            margin-left: 16%;
        }
        .section8 .section8_left p{
            width:200px;height:120px;
            margin-top:30px;
            margin-left: 25%;
        }
        .section8 .section8_left h1{
            /*margin-left: 15px;*/
            margin-left: 16%;
        }
        .section8_right{
            width:100%;
            height: auto;
        }
        .right_container{
            background-color: #8C6238;
            width:100%;
            height:250px;
            float:left;
            position:relative;

        }
        .section8_right .line4{
            background-color: #fff;
            width:30px;
            height: 2px;
            /* border:1px solid red; */
            margin-top: 10px;
        }
        .section8_right .species:nth-of-type(1) {
            float:left;
            width:120px;
            height:200px;
            position:absolute;
            /*border:1px solid red;*/
            top:0;
            left:5%;
        }
        .section8_right .species:nth-of-type(2) {
            float:left;
            width:120px;
            height:200px;
            position:absolute;
            top:0;
            left:35%;

        }
        .section8_right .species:nth-of-type(3) {
            float:left;
            width:120px;
            height:200px;
            position:absolute;
            top:0;
            left:65%;

        }
        .section8_right .species_img{
            width:100%;
            height:130px;
            /*padding-left:30px;*/
        }
        .section8_right .species_title{
            font-size: 12px;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            width:100%;
            height: 10px;
        }
        .section8 .species_img01{
            width:20px;
            height:10%;
        }
        .section8 .species_word{
            font-size: 12px;
            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            -o-transform: scale(0.6);
            transform: scale(0.6);
            margin: 0px;
            padding: 0px;
        }
        .section9{
            width:100%;
            height:auto;
            padding: 0px;
            margin: 0px;
            /*border:1px solid red;*/
        }
        .section9 .news_container .news1{
            width:45%;
            padding-left: 0px;
            height:auto;
            margin-bottom: 8px;
            text-align: center;
            /*border: 1px solid red;*/
        }
        .news_container img{
            width:98%;
            height:auto;
        }
        .news1 .news_title{
            font-size:10px;
            width:98%;
            height:12px;
            text-align: center;
            /*margin-top: 30px;*/
        }
        .news1 .news_title p{
            font-size:10px;
            width:98%;
            height:12px;
            text-align: center;
            margin-left: 35px;
        }
        .news1 .news_content p{
            font-size: 10px;
            width:98%;
            height:20px;
            padding-top: 10px;

        }
        .news1 .news_img{
            width:50%;
            padding-top: 10px;
            height:30px;
        }
    }



</style>

<body>
{{--导入头部--}}
@include('frontend.module.myheader')

<div class="container-fluid">
    <!--附加-->
    <div id="NavTop" style="display: block">
        <div id="NavCon">
            <div class="P">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/电话.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/1.jpg')}}"></div>
                <a href="javascript:void(0);"
                   title="电话" data-container="body"
                   data-toggle="popover" data-placement="left"
                   data-content=" 服务热线:400-000-5252">电话</a>
            </div>
            <div class="Z">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/咨询.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/2.jpg')}}"></div>
                <a href="javascript:void(0);"
                   title="咨询" data-container="body"
                   data-toggle="popover" data-placement="left"
                   data-content=" 湖南省常德市鼎城区周家电镇">咨询</a>
            </div>
            <div class="W">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/微信.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/4.jpg')}}"></div>
                <a href="javascript:void(0);"
                   title="微信" data-container="body"
                   data-toggle="popover" data-placement="left"
                   data-content="400-000-5252">微信</a>
            </div>
            <div class="D" id="topArrow">
                {{--<!--<div><img style="width:20px;height: 16px" src="{{URL::asset('images/frontend/顶部.png')}}"></div>-->--}}
                <div><img style="width:36px;height:32px;" src="{{URL::asset('images/frontend/3.jpg')}}"></div>
                <span title="Top" >顶部</span></div>
        </div>
    </div>

    <!-- area0 start --------------------------------------------------------------------------------------------------->
    <!-- 轮播图开始-->
    <div id="myCarousel" class="carousel slide">

        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner" >
            @php
                $slideshow = $data[0]["slideshow"]->data;
            @endphp
            @if(isset($slideshow) && $slideshow)
                @for($i=0;$i<count($slideshow);$i++)
                    @if($i!=0)
                        <div class="item">
                    @else
                        <div class="item active">
                            @endif
                            <a target="{{$slideshow[$i]->target}}" href="{{$slideshow[$i]->link}}">
                                <img class="lunbo" src="{{ storage_image_url($slideshow[$i]->image) }}">
                            </a>
                        </div>
                @endfor
            @endif

            <!-- 轮播（Carousel）导航 -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <!-- 轮播图结束-->

        <!-- 商城链接图标开始-->
        <div class="container-fluid secition1">
            <div class="row">
                <dl class="col-md-4 col-xs-4 text-center dl">
                    <dd><a href="{{$data[0]["link"][0]}}" target="_blank"><img alt="" class="section1_img img1_position" src="{{$data[0]["img"][0]}}"/></a></dd>
                    <dt class="section1_word word1_position">
                        <a class="section1_text" href="{{$data[0]["link"][0]}}" target="_blank">{{$data[0]["word"][0]}}</a></dt>
                </dl>

                <dl class="col-md-4 col-xs-4 text-center dl">
                    <dd><a href="{{$data[0]["link"][1]}}" target="_blank"><img alt="" class="section1_img" src="{{$data[0]["img"][1]}}"/></a></dd>
                    <dt class="section1_word"><a class="section1_text" href="{{$data[0]["link"][1]}}" target="_blank">{{$data[0]["word"][1]}}</a></dt>
                </dl>

                <dl class="col-md-4 col-xs-4 text-center dl">
                    <dd><a href="{{$data[0]["link"][2]}}" target="_blank"><img alt="" class="section1_img img3_position" src="{{$data[0]["img"][2]}}"/></a></dd>
                    <dt class="section1_word word3_position"><a class="section1_text" href="{{$data[0]["link"][2]}}" target="_blank">{{$data[0]["word"][2]}}</a></dt>
                </dl>

            </div>
        </div>
        </div>
        <!-- 商城链接图标结束-->
        <!-- area0 end-------------------------------------------------------------------------------------------------->

        <!-- area3 start ------------------------------------------------------------------------------------------------------->
        <div class="container-fluid secition2 ">
             {{--<img class="img-responsive center-block" src="{{URL::asset('images/frontend/title2.jpg')}}">--}}
             <img class="img-responsive center-block" src="{{$data[1]["img"][0]}}">

        </div>
        <div class="container-fluid secition3 ">
            <div class="row">
         <div class="section3_left col-md-6 col-xs-12 center-block">
            {{--<!--<img  class="img-responsive section3_img" src="../static/common/images/about.png">-->--}}
            <div class="swiper-container " id="swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {{--<video id="video1"   src="{{URL::asset($data[1]["video"][0])}}"  type="all">--}}
                        {{--</video>--}}
                        <video id="video1"   src="http://vodes.oss-cn-beijing.aliyuncs.com/%E5%A4%AE%E8%A7%86%E6%80%81%E5%BA%A6%E6%A0%8F%E7%9B%AE%E7%BB%84%7E1.mp4"  type="video.mp4">
                        </video>
                        <div class="span"><span class="iconfont" style="opacity: 1">&#xe63c;</span></div>
                    </div>
                    <div class="swiper-slide">
                        <video id="video2" poster="{{URL::asset('images/frontend/about.png')}}" src="{{URL::asset($data[1]["video"][1])}}"  type="video.mp4"> 您的浏览器不支持 video 标签。
                        </video>
                        <div class="span"><span class="iconfont" style="opacity: 1">&#xe63c;</span></div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-white" id="dots"></div>
                <div class="swiper-button-prev swiper-button-white"></div><!--左箭头-->
                <div class="swiper-button-next swiper-button-white"></div><!--右箭头-->
            </div>
        </div>

        <div class="section3_right col-md-6 col-xs-12 center-block ">
            <img class="section3_right_img" src="{{URL::asset('images/frontend/line2.png')}}">

            <h1>{{$data[1]["word"][0]}}</h1>
            <p class="secition3_word">{{$data[1]["word"][1]}}</p>
            {{--<!--<div ><a href=""><img id="xiangqin1" src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>-->--}}
            <div ><a href="{{url($data[1]['link'][0])}}"><img id="xiangqin1" src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>
        </div>
            </div>
    </div>

    <!-- area3 end -->

    <!-- area4 start ------------------------------------------------------------------------------------------------------->
    <div class="secition4 ">
        <img class="section4_img" src="{{$data[2]["img"][0]}}">
    </div>
    <div class="container-fluid secition5 ">

        {{--<img class="img-responsive center-block " src="{{URL::asset('images/frontend/tiandi2.jpg')}}">--}}
        <img class="img-responsive center-block " src="{{$data[2]["img"][1]}}">
    </div>

    {{--<div class="container-fluid section6" style="background: url('../../../../images/frontend/tup2.jpg');background-size: 100% 100%;">--}}
    <div class="container-fluid section6" style="background: url('{{URL::asset($data[2]["img"][2])}}');background-size: 100% 100%;">
        <div class="section6_main">
            <img class="img-responsive center-block more" src="{{URL::asset('images/frontend/更多.jpg')}}">
        </div>
    </div>

    {{--区域4--}}
    <div class="container-fluid section7 center-block">
        <div class="container ">
            {{--<img src="{{URL::asset('images/frontend/ins.png')}}">--}}
            <img src="{{$data[3]["img"][0]}}">
            {{--<!--<img src="{{URL::asset('images/frontend/ins.png')}}">-->--}}
            <img class="section7_img" src="{{URL::asset('images/frontend/dots.png')}}">

            @for($i=1,$j=0;$i<=6;$i++)
                <div class="{{'introduce_word0'.$i}}">
                    <p class="introduce_title">{{$data[3]["word"][$j++]}}</p>
                    <p class="introduce_sentence">{{$data[3]["word"][$j++]}}</p>
                </div>
            @endfor
        </div>
    </div>

    <div class="container-fluid section8 ">

    <div class="section8_left col-md-3  col-md-offset-1 col-sm-6  container-fluid col-xs-12">
        {{--<!--<img class="img1" src="{{URL::asset('images/frontend/line2.png')}}">-->--}}
        <img class="img1" src="{{URL::asset('images/frontend/line2.png')}}">
        <h1>{{$data[4]["word"][0]}}</h1>
        <p>{{$data[4]["word"][1]}}</p>
        {{--<!--<div class="img"><a href=""><img src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>-->--}}
        <div class="img"><a href="{{$data[4]["link"][0]}}"><img src="{{URL::asset('images/frontend/xiangqing.png')}}"></a></div>
    </div>

    <div class="section8_right  center-block ">
        <div class="right_container col-md-9 text-center col-sm-9">
            @for($i=0,$j=2;$i<count($data[4]["img"]);$i++)
            <div class="species col-md-4 col-sm-4 ">
                 {{--<div><img  class="species_img" src="{{URL::asset('images/frontend/shancha.png')}}"></div>--}}
                 <div><img  class="species_img" src="{{$data[4]["img"][$i]}}"></div>
                <div class="species_title"><p>{{$data[4]["word"][$j++]}}</p></div>
                {{--<!--<div><img class="species_img01" src="{{URL::asset('images/frontend/line3.png')}}"></div>-->--}}   
                 <!-- <div><img class="species_img01" src="{{URL::asset('images/frontend/line4.png')}}"></div> -->
                 <div class="line4 center-block"></div>
                 <div class="species_word text-left"><p>{{$data[4]["word"][$j++]}}</p></div>
            </div>
            @endfor
        </div>
    </div>
</div>

   </div>

  <div class="container-fluid section9 col-sm-12">
        <div class="news_title">
            <img src="{{URL::asset('images/frontend/line2.png')}}"/>
            <p >{{$data[5]["word"][0]}}</p>
        </div>
        <div class="news_container row ">
            <div class="news1 col-md-3 col-sm-3 text-left">
                <div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>
                <div class="news_title text-left"><p>{{$data[5]["word"][1]}}</p></div>
                <div class="news_content"><p>{{$data[5]["word"][2]}}</p></div>
                {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
                <div><a href="{{$data[5]["link"][0]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-3 col-sm-3 text-left">
                {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news2.png')}}"/></div>--}}
                <div><img class="news1_img" src="{{$data[5]["img"][0]}}"/></div>
                <div class="news_title"><p>{{$data[5]["word"][3]}}</p></div>
                <div class="news_content"><p>{{$data[5]["word"][4]}}</p></div>
                <div><a href="{{$data[5]["link"][1]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-3 col-sm-3 text-left">
                {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>--}}
                <div><img class="news1_img" src="{{$data[5]["img"][1]}}"/></div>
                <div class="news_title"><p>{{$data[5]["word"][5]}}</p></div>
                <div class="news_content"><p>{{$data[5]["word"][6]}}</p></div>
                {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
                <div><a href="{{$data[5]["link"][2]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
            <div class="news1 col-md-3 col-sm-3 text-left" id="show" style="display: none">
                {{--<!--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>-->--}}
                {{--<div><img class="news1_img" src="{{URL::asset('images/frontend/news1.png')}}"/></div>--}}
                <div><img class="news1_img" src="{{$data[5]["img"][2]}}"/></div>
                <div class="news_title"><p>{{$data[5]["word"][7]}}</p></div>
                <div class="news_content"><p>{{$data[5]["word"][8]}}</p></div>
                {{--<div><a href=""><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>--}}
                <div><a href="{{$data[5]["link"][3]}}"><img class="news_img" src="{{URL::asset('images/frontend/xiangqing.png')}}"/></a></div>
            </div>
        </div>
    </div>

{{--导入尾部--}}
@include("frontend.module.myfooter")

<script src="../../../../js/myheader.js"></script>

<script>
    window.onload=function(){
        console.log("88");
        var width = window.screen.width;
        var cWidth = document.body.clientWidth;
        var showDiv = document.getElementById("show");
        var pageDiv = document.getElementById("pageHide");
        var contactDiv = document.getElementById("contactHide");
        var navtop = document.getElementById("NavTop");
        var word = document.querySelectorAll(".section1_text");
        var logo = document.getElementById("logo");
        console.log(width);
        logo.style.display="none";
        //置顶
        $("#topArrow").click(function(){
            $(document).scrollTop(0);
        });
        //调用popover
        $("[data-toggle='popover']").popover();
        //轮播图片间隔
        $('#myCarousel').carousel({interval:3000});
        if(width<=768 || cWidth<=1200){
            showDiv.style.display="block";
            pageDiv.style.display="none";
            contactDiv.style.display = "none";
            navtop.style.display = "none";
            word[0].innerHTML="天猫";
            word[1].innerHTML="拼多多";
            word[2].innerHTML="微信商城";
            $(".header").css("display","none");
            logo.style.display="block";
            // console.log(word[0])
            console.log( $(".header"));
            console.log("width")

        }else{
            showDiv.style.display="none";
            pageDiv.style.display="block";
            contactDiv.style.display = "block";
        }
        //视频轮播代码(swiper)
        var mySwiper2 = new Swiper('#swiper2', {
            loop : true,
            speed : 1000,
            autoplay : {
                delay : 2000,
                stopOnLastSlide : false,
                disableOnInteraction : true,
                navigation:true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        })

        mySwiper2.el.onmouseover = function() { //鼠标进入
            mySwiper2.autoplay.stop();  //轮播停止
        }
        mySwiper2.el.onmouseout = function() { //鼠标离开
            var v_len = $("#swiper2 .swiper-slide").find("video").length;
            for(var i = 0;i<v_len;i++){
                $("#swiper2 .swiper-slide").find("video").get(i).pause(); //把所有停止
                $("#swiper2 .swiper-slide .span").get(i).style.opacity="1";
            }
            mySwiper2.autoplay.start(); //轮播开始
        }

        $("#swiper2 .swiper-slide .span").on("click", function() {
            // $("#button1").fadeout("slow");
            var isPaused = $(this).prev().get(0).paused;  //视频是否在播放
            if(isPaused){
                $(this).prev().get(0).play();
                $(this).get(0).style.opacity="0";
                // $(this).fadeout(1000)
            }else{
                $(this).prev().get(0).pause();
                $(this).get(0).style.opacity="1";
            }
        });
    }
</script>
</body>
