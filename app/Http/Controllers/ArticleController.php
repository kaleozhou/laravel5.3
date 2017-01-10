<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Atsort;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public $atsortdata;
    public $nolist;
    public $norightlist;
    public function __construct()
    {
        $this->atsortdata=array();
        $atsort01s=Atsort::where('parent_id',0)->get();
        foreach ($atsort01s as $atsort01) {
            $this->atsortdata[$atsort01->name]=Atsort::where('parent_id',$atsort01->id)->get();
        }
        $this->nolist=array(6,7,8,9,10,11,12);
        $this->norightlist=array(13,18);
    }

    public function index(){
        return view('index')
            ->with('atsortdata',$this->atsortdata);

    }

    public function articledetail($article_id=1){
        $article=Article::find($article_id);
        if (empty($article)) {
            $article=Article::find(1);
        }
        $atsort=$article->atsort;
        $parent_sort=Atsort::find($atsort->parent_id);
        $list_sort=Atsort::where('parent_id',$parent_sort->id)->get();
        return view('articledetail')
            ->with('article',$article)
            ->with('list_sort',$list_sort)
            ->with('nolist',$this->nolist)
            ->with('norightlist',$this->norightlist)
            ->with('atsortdata',$this->atsortdata)
            ->with('parent_sort',$parent_sort);
    }
    /**
     * @access 
     * @author kaleo <kaleo1990@hotmail.com>
     * @param
     * @return
     */
    public function articlelist($atsort_id=6){
        //一级目录
        //设置直接现实的list
        if(in_array($atsort_id, $this->nolist))
        {
            $atsort=Atsort::find($atsort_id);
            $article=$atsort->articles->first();
            if(!empty($article))
            {
                $url='/art/'.$article->id;
            }
            else
            {
                $url='/art/6';

            }
            return redirect($url);
        }
        else
        {

            if ($atsort_id<6||$atsort_id>25) {
                $atsort_id=rand(11,25); 
            }
            $atsort=Atsort::find($atsort_id);
            $parent_sort=Atsort::find($atsort->parent_id);
            $list_sort=Atsort::where('parent_id',$parent_sort->id)->get();
            $articles=$atsort->articles;
            return view('articlelist')
                ->with('articles',$articles)
                ->with('atsort',$atsort)
                ->with('list_sort',$list_sort)
                ->with('atsortdata',$this->atsortdata)
                ->with('parent_sort',$parent_sort);

        }
    }
}
