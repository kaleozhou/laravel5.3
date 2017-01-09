<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Sort;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index($article_id=1){
        $article=Article::find($article_id);
        if (empty($article)) {
            $article=Article::find(1);
        }
        $sort=$article->sort();
        $parent_sort=Sort::where('id',$sort->parent_id);
        $list_sort=Sort::where('parent_id',$parent_sort->id);
        return view('article')
           ->with('article',$article)
           ->with('list_sort',$list_sort)
           ->with('parent_sort',$parent_sort);
    }
}
