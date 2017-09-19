<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articleList', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::select('SELECT DISTINCT category FROM articles ORDER BY category');

        return view('articleForm')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->input();

        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'introduction' => 'required|min:5|max:255',
            'body' => 'required',
            'publish' => 'required',
            'category-drop' => 'required',
            'image' => 'required|url',
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->image = $request->input('image');
        $article->introduction = $request->input('introduction');
        $article->body = $request->input('body');
        $article->unique_slug = str_slug(substr($request->input('title'), 0, 70)) . '-' . rand(1, 999);
        $article->author = $request->user()->id;
        $article->published = false;

        if($request->input('publish') == "yes" && Auth::user()->can('publish-article')){
            $article->published = true;
        }

        $article->category = ($request->input('category-drop') != "0") ? strtolower($request->input('category-drop')) : "uncategorised";
        $article->category = ($request->input('category') == "") ? $article->category : strtolower($request->input('category'));

        $article->save();

        return redirect()->action('SettingsController@home');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = DB::select('SELECT DISTINCT category FROM articles ORDER BY category');

        return view('articleEdit')->with(['categories' => $categories, 'article' => $article]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'introduction' => 'required|min:5|max:255',
            'body' => 'required',
            'category-drop' => 'required',
            'image' => 'required|url',
        ]);

        $article = Article::find($request->input('id'));
        $article->title = $request->input('title');
        $article->image = $request->input('image');
        $article->introduction = $request->input('introduction');
        $article->body = $request->input('body');

        if($request->input('publish') == "yes" && Auth::user()->can('publish-article')){
            $article->published = true;
        }

        $article->save();

        return redirect()->action('ArticleController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Article::destroy($id);

        return redirect()->action('ArticleController@index');
    }
}
