<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.news.list', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        $article->views += 1;
        $article->save();

        $articles_list_alls = Article::orderBy('created_at', 'DESC')->paginate(4);
        $articles = Article::where('category_id', $slug)->orderBy('created_at', 'DESC')->get();

        return view('front.news.show', compact(
            'article',
            'articles_list_alls',
            'articles'
        ));
    }
}
