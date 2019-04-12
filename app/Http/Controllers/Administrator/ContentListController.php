<?php

namespace App\Http\Controllers\Administrator;

use DB;
use Wanglelecc\Laracms\Models\Article;
use Illuminate\Http\Request;
use Wanglelecc\Laracms\Http\Requests\Administrator\ArticleRequest;
use Wanglelecc\Laracms\Handlers\CategoryHandler;
use Wanglelecc\Laracms\Models\Category;
use Wanglelecc\Laracms\Models\MultipleFile;

class ContentListController extends Controller
{
    public function index(Article $article, Request $request)
    {
        $this->authorize('index', $article);

        $datas = DB::table("articles")->join("article_category", "articles.id", "=", "article_category.article_id")->select();
//        dump($data->get());
//        // 分类过滤
//        if(($category_id = $request->category ?? 0) && ($category = Category::find($category_id))){
//            $article = $category->articles();
//        }
//
//        $article = $article->with(['categorys']);
//        // 关键字过滤
//        if($keyword = $request->keyword ?? ''){
//            $article->where('title', 'like', "%{$keyword}%");
//        }
//
//        // 开始时间过滤
//        if($begin_time = $request->begin_time ?? ''){
//            $article = $article->where('created_at','>',$begin_time);
//        }
//
//        // 结束时间过滤
//        if($end_time = $request->end_time ?? ''){
//            $article = $article->where('created_at','<',$end_time);
//        }
//
//        $articles = $article->ordered()->recent()->paginate(config('administrator.paginate.limit'));
//
//        // 修正页码
//        if( $articles->count() < 1 && $articles->lastPage() > 1 ){
//            return redirect($articles->url($articles->lastPage()));
//        }
//
        for($i=1;$i<=10;$i++){
            if($request->getRequestUri() == "/administrator/articles?type=article"){
                $blade = "myarticle";
                $data = $datas->where("type","=","article")->get();
            }
            elseif($request->getRequestUri() == "/administrator/blocks"){
                $blade = "myblock";
                $data = $datas->where("type","=","block")->get();
            }
            elseif($request->getRequestUri() == "/administrator/articles?type=video"){
                $blade = "myarticle";
                $data = $datas->where("type","=","video")->get();
            }
//            elseif($request->getRequestUri() == "/administrator/blocks?page=$i"){
//                $blade = "myblock";
//            }
//            elseif($request->getRequestUri() == "/administrator/articles?page=$i"){
//                $blade = "myarticle";
//            }
            else{
                dump("位置错误");
            }
        }
        return laravel_backend_view($blade.'.index', compact('data'));
}

    public function edit(Article $article, CategoryHandler $categoryHandler, Request $request)
    {
        $this->authorize('update', $article);
        $articleCategorys = $article->categorys()->pluck('category_id')->toArray();
//        $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('article')), $articleCategorys);
//        $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('page')), $articleCategorys);
        if($request->type == "article"){
            $blade = "myarticle";
            $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('article')), $articleCategorys);
        }
        else{//$request->page == "blocks"
            $blade = "myblock";
            $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('page')), $articleCategorys);
        }
        return laravel_backend_view($blade.'.create_and_edit', compact('article', 'category'));
    }
}
