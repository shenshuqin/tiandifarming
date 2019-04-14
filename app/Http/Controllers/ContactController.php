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

}
