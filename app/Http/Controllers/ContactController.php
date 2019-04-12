<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SiteMessage;
use App\Models\Article;
use App\Common\MyLibs;
use DB;

class ContactController extends Controller
{
    public function index(){
        for($i=1;$i<=3;$i++){
            //if($i==1){continue;}
            $data[$i]=MyLibs::contentHandlers(Article::getContent("页面6区域".$i));
        }

        $site_settings = SiteMessage::getDetails();

        //dump($data);
        return laravel_frontend_view('contact', ['data' => $data]);

    }

    public function contentHandler($str){
        //首先获取图片链接
        preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
        $str = strip_tags($str);
        $word=explode("==========", $str);
        if(preg_match_all("/文章标题\[(.+?)\]/",$str,$title)){
            foreach($title[1] as $title){
                if(!empty($title)){
                    $links[]="article/show/2/2/".Article::titleToId($title);
                }
                else{
                    $links[]="#";
                }
            }
        }
        else{
            preg_match_all("/链接\[(.+?)\]/",$str,$link);
            $links=$link[1];
        }
        return [
            "img"=>$img[0],
            "word"=>array_values(array_filter($word)),
            "link"=>( $links= isset($links) ? $links:[] )
        ];
    }
}
