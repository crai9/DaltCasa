<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\FeaturedItem;
use App\Article;
use App\Music;
use Parsedown;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->parsedown = new Parsedown();
    }


    public function showArticle($slug)
    {
        $article = Article::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$article){
            abort(404);
        }

        $article->body = $this->parsedown->text($article->body);
        //$article->increment('view_count');
        return view('article', ['article' => $article]);
    }

    public function showWritersArticles($id)
    {
        $writer = User::find($id);

        if(!$writer){
            abort(404);
        }

        return $writer->articles;
        //return Article::orderBy('created_at', 'desc')->paginate(3);
    }

    public function showMusic($slug)
    {
        $music = Music::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$music){
            abort(404);
        }

        $music->body = $this->parsedown->text($music->body);
        return view('showMusic', ['music' => $music]);
    }

    public function listArticles()
    {
        $articles = Article::where('published', 1)->get();

        return view('articles', ['articles' => $articles]);
    }

    public function listEvents()
    {
        $events = Event::where('published', 1)->get();

        return view('events', ['events' => $events]);
    }

    public function showEvent($slug)
    {
        $event = Event::where([['unique_slug', $slug], ['published', 1]])->first();

        if(!$event){
            abort(404);
        }

        $event->body = $this->parsedown->text($event->body);
        return view('event', ['event' => $event]);
    }

    public function homePage()
    {
        $featuredItems = FeaturedItem::all();

        return view('home', ['featuredItems' => $featuredItems]);
    }

    public function music()
    {
        $music = Music::where('published', '=', 1)->orderBy('created_at', 'desc')->get();

        return view('music', ['musics' => $music]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {
        if(!Auth::user()){
            return "You're not logged in";
        }

        $contact = new Contact();

        $contact->message = $request->input('message');
        $contact->user_id = Auth::user()->id;

        $contact->save();

        return redirect('/');
    }
}
