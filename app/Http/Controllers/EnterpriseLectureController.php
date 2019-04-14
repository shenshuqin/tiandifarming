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


}