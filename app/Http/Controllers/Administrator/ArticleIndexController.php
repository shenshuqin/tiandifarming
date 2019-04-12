<?php


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use DB;

class ArticleIndexController extends Controller
{

    /**
     * 列表
     *
     * @param int $navigation
     * @param Category $articleCategory
     * @param Article $article
     * @return mixed
     */
    public function index($navigation = 0, Category $articleCategory, Article $article)
    {
        $category = $articleCategory;
        $articles = $category->articles()->active()->ordered()->recent()->paginate(15);

        //        dump($articles);
//        return frontend_view('article.'.$articleCategory->getTemplate('list'), compact('navigation','category','articles'));
    }

}
