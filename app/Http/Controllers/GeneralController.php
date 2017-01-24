<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedItem;
use App\Article;
use App\Music;

class GeneralController extends Controller
{

    public function showArticle($slug)
    {
        $article = Article::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$article){
            abort(404);
        }

        return view('article', ['article' => $article]);
    }

    public function showMusic($slug)
    {
        $music = Music::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$music){
            abort(404);
        }

        return view('showMusic', ['music' => $music]);
    }

    public function listArticles()
    {
        $articles = Article::where('published', 1)->get();

        return view('articles', ['articles' => $articles]);
    }

    public function homePage()
    {
        $featuredItems = FeaturedItem::all();

        return view('home', ['featuredItems' => $featuredItems]);
    }

    public function music()
    {
        return view('music');
    }

    public function about()
    {
        return view('about');
    }

    public function events()
    {
        return view('events');
    }

    public function contact()
    {
        return view('contact');
    }
}
