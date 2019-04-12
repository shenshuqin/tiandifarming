<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use DB;

class ArticleController extends Controller
{
	//文章展示
    public function show($navigation = 0, $category = 0,$id)
    {
        $click = DB::table('articles')->where('id',$id)->increment('views');
    	$getContent = Article::getArticle($id);
    	//dump($getContent);
    	//dump($getContent->title);
        //dump($getContent->content);
          
        return laravel_frontend_view('show', compact('getContent'));
    }

    public function edit(Article $article, CategoryHandler $categoryHandler)
    {
        $this->authorize('update', $article);
        $articleCategorys = $article->categorys()->pluck('category_id')->toArray();
        $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('article')), $articleCategorys);

        return backend_view('article.create_and_edit', compact('article', 'category'));
    }



}
