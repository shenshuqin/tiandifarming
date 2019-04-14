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

class ProduceController extends Controller
{
    public function index($page){
        $data[0]=MyLibs::contentHandlers(Article::getContent("页面3区域0"));
        $page = $page == 2? 2:1;
        $data[1]=MyLibs::contentHandlers(Article::getContent("页面3区域".$page));
        $data[2][0]=MyLibs::contentHandlers(Article::getContent("小奢品牌"));
        return laravel_frontend_view('prodcenter', compact('data'));
    }

    public function product(Request $request){
        $product = MyLibs::contentHandlers(Article::getContent("小奢品牌"));//从区块里获取全部商品信息
        $pro_count = count($product["img"]);//计算商品条数
        $limit = $request->limit;
        $page_index = $request->page -1;
        if($limit<1||$limit>$pro_count){
            return false;
        }
        $page_count = ceil($pro_count/$limit);
        if($page_index<0||$page_index>$page_count-1){
            return false;
        }

        $start = $limit*$page_index;
        $data["img"] = array_slice($product["img"],$start,$limit);
        $data["link"] = array_slice($product["link"],$start,$limit);
        $data["word"] = array_slice($product["word"],$start*4,4*$limit);
        $data["msg"]["pagecount"] = $page_count;
        $data["msg"]["curpage"] = $page_index + 1;
        return $data;
    }





}