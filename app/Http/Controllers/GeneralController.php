<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class GeneralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showArticle($slug)
    {
        //$article = Article::where('unique_slug', $slug);
        $article = Article::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$article){
            abort(404);
        }

        return view('article', ['article' => $article]);
    }
}
