<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/3/18
 * Time: 17:21
 */
/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Wanglelecc\Laracms\Models\Category;
use App\Models\Category;
use App\Models\SiteMessage;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Common\MyLibs;

class EnterpriseLectureController extends Controller
{
    public function index(){

        for($i=0;$i<=3;$i++){
            $data[$i]=MyLibs::contentHandlers(Article::getContent("页面2区域".$i));
        }
        return laravel_frontend_view('enterprise', ['data' => $data]);
    }

//    public function contentHandler($str){
//        //首先获取图片链接
//        preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
//        $str = strip_tags($str);
//        $word=explode("==========", $str);
//        if(preg_match_all("/文章标题\[(.+?)\]/",$str,$title)){
//            foreach($title[1] as $title){
//                if(!empty($title)){
//                    $links[]="article/show/2/2/".Article::titleToId($title);
//                }
//                else{
//                    $links[]="#";
//                }
//            }
//        }
//        else{
//            preg_match_all("/链接\[(.+?)\]/",$str,$link);
//            $links=$link[1];
//        }
//        return [
//            "img"=>$img[0],
//            "word"=>array_values(array_filter($word)),
//            "link"=>( $links= isset($links) ? $links:[] )
//        ];
//    }


}