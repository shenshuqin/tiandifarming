<?php
namespace App\Common;
use App\Models\Article;
use Illuminate\Support\Facades\URL;
class MyLibs{
    public static function contentHandlers($str){
        //首先获取图片链接
        //preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
        preg_match_all("/<img.+?src=\"(.+?)\"(.|\n)*?width=.+?height=.+?>/",$str,$img);

        for($i=0; $i<count($img[1]); $i++){
            if(!preg_match_all("/data:image/", $img[1][$i], $jj)){
//                dump($img[1][$i]);
                preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$img[1][$i],$ii);
                $img[1][$i] = URL::asset($ii[0][0]);
            }
        }
        $str = strip_tags($str);
        $str=str_ireplace("\\n","<br>",$str);
        $str=str_ireplace("\r\n","",$str);
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
        $data = [
            "img"=>$img[1],
            "word"=>array_values(array_filter($word)),
            "link"=>( $links= isset($links) ? $links:[] )
        ];
//        dump($data);
        return $data;
    }
    function delempty($v) {
        return $v != ""? true : false;
    }
}
