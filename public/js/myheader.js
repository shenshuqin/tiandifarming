window.onload=function(){
    console.log("00");
    $(".bds_weixin").hover(function(){
            console.log("00000");
            $(".wechat-share").css("display","block");
        },function(){
            $(".wechat-share").css("display","none");
        }
    )
};
