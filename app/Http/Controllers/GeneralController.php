<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\FeaturedItem;
use App\Article;
use App\Music;
use Parsedown;

class GeneralController extends Controller
{

    public function showArticle($slug)
    {
        $article = Article::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$article){
            abort(404);
        }

        $author = User::find($article->author);

        $parsedown = new Parsedown();
        $article->body = $parsedown->text($article->body);
        return view('article', ['article' => $article, 'author' => $author]);
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
        $music = Music::where('published', '=', 1)->get();

        return view('music', ['musics' => $music]);
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
