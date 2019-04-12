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
//use App\Models\SiteMessage;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Common\MyLibs;

class IndexController extends Controller
{
    public function index(){
        for($i=0;$i<=5;$i++){
            $data[$i]=MyLibs::contentHandlers(Article::getContent("页面1区域".$i));
        }
        $data[0]["slideshow"] = get_block("2018_03_04_224524_index_slide_block");//轮播图

        $videos = DB::table('files')->select("path")->where("type", "video")->get();
//        dump($videos[0]->path);
//        dump($videos[0]["path"]);
        foreach($videos as $video){
            $data[1]["video"][] = "/storage/".$video->path;
        }
//        dump($data);
//        $site_settings = SiteMessage::getDetails();
//        $data[10] = $site_settings;

        return laravel_frontend_view('index', ['data' => $data]);
    }

//    public function contentHandler($str){
//        //首先获取图片链接
//        preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
////        preg_match_all("/<img.+?src=\"(.+?\.gif|\.jpeg|\.png|\.jpg|\.bmp)\"/",$str,$img);
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
//

}