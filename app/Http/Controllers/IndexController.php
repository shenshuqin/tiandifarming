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
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Common\MyLibs;

class IndexController extends Controller
{
    public function index()
    {
        for ($i = 0; $i <= 5; $i++) {
            $data[$i] = MyLibs::contentHandlers(Article::getContent("页面1区域" . $i));
        }
        $data[0]["slideshow"] = get_block("2018_03_04_224524_index_slide_block");//轮播图

        $videos = DB::table('files')->select("path")->where("type", "video")->get();
//        dump($videos[0]->path);
//        dump($videos[0]["path"]);
        foreach ($videos as $video) {
            $data[1]["video"][] = "/storage/" . $video->path;
        }
        dump($data);

//        $data[10] = $site_settings;

        return laravel_frontend_view('index', ['data' => $data]);
    }

}