<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Article;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::whereTranslationLike('title' , '%'.$request->search.'%')->orderByDesc('id')->paginate(10);

        return view('site.pages.blog' , ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        $relates = Article::where('id' , '!=' , $article->id)->orderBy('id' , 'desc')->take(4)->get();

        return view('site.pages.article' , ['article' => $article , 'relates' => $relates]);
    }
}
