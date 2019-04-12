<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Category;
use App\Models\SiteMessage;
use App\Models\Article;
use App\Common\MyLibs;

class NewsController extends Controller
{
    //
    public function index(Request $request){

        $paginateLimit = config('administrator.paginate.limit');
        $data = DB::table('articles')
            ->join('article_category','articles.id','=','article_category.article_id')
            ->where('article_category.category_id',4)
            ->Where('articles.keywords','!=','big')
            ->paginate(6);
        for($i=1;$i<=2;$i++){
            $datas[$i]=MyLibs::contentHandlers(Article::getContent("页面4区域".$i));
        }
        //dump($datas);
        return laravel_frontend_view('news', ['data' => $data,'datas'=>$datas]);
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
