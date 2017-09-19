<?php

namespace App\Http\Controllers;

use Validator;
use App\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function index()
    {
        return view('musicList', ['musics' => Music::all()]);
    }

    public function create()
    {
        return view('musicForm');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'embed-type' => 'required|in:mixcloud,soundcloud,youtube',
            'embed' => 'required|url',
            'link' => '',
            'body' => '',
            'publish' => 'required',
        ]);

        $music = new Music();
        $music->title = $request->input('title');
        $music->body = $request->input('body');
        $music->embed = $request->input('embed');
        $music->embed_type = $request->input('embed-type');
        $music->link = $request->input('link');
        $music->unique_slug = str_slug($request->input('title')) . '-' . rand(1, 999);
        $music->author = $request->user()->id;
        $music->published = false;

        if($request->input('publish') == "yes"){
            $music->published = true;
        }

        if($request->input('embed-type') == "mixcloud") {

            $music->iframe_src = "https://www.mixcloud.com/widget/iframe/?feed=" . $request->input('embed');

        } else if($request->input('embed-type') == "soundcloud"){

            $music->iframe_src = "https://w.soundcloud.com/player/?url="
                . $request->input('embed')
                . "&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true";

        } else if($request->input('embed-type') == "youtube"){

            $explode = explode("v=", $request->input('embed'));

            if(isset($explode[1])){
                $yt_id = substr($explode[1], 0, 11);
                $music->iframe_src = "https://www.youtube.com/embed/" . $yt_id;
            } else {

                $validator = Validator::make($request->all(), []);
                $validator->errors()->add('embed', 'Something is wrong with this field!');

                return redirect('admin/music/create')
                    ->withErrors($validator)
                    ->withInput();
            }

        } else {
            $music->iframe_src = "#";
        }

        $music->save();

        return redirect()->action('SettingsController@home');

    }

    public function edit(Music $music)
    {
        return view('musicEdit', ['music' => $music]);
    }

    public function update(Request $request, Music $music)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'embed-type' => 'required|in:mixcloud,soundcloud,youtube',
            'embed' => 'required|url',
            'link' => '',
            'body' => '',
        ]);

        $music = Music::find($request->input('id'));

        $music->title = $request->input('title');
        $music->body = $request->input('body');
        $music->embed = $request->input('embed');
        $music->embed_type = $request->input('embed-type');
        $music->link = $request->input('link');

        if($request->input('publish') == "yes"){
            $music->published = true;
        }

        if($request->input('embed-type') == "mixcloud") {

            $music->iframe_src = "https://www.mixcloud.com/widget/iframe/?feed=" . $request->input('embed');

        } else if($request->input('embed-type') == "soundcloud"){

            $music->iframe_src = "https://w.soundcloud.com/player/?url="
                . $request->input('embed')
                . "&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true";

        } else if($request->input('embed-type') == "youtube"){

            $explode = explode("v=", $request->input('embed'));

            if(isset($explode[1])){
                $yt_id = substr($explode[1], 0, 11);
                $music->iframe_src = "https://www.youtube.com/embed/" . $yt_id;
            } else {

                $validator = Validator::make($request->all(), []);
                $validator->errors()->add('embed', 'Something is wrong with this field!');

                return redirect('admin/music/' . $music->id . '/edit')
                    ->withErrors($validator)
                    ->withInput();
            }

        } else {
            $music->iframe_src = "#";
        }

        $music->save();

        return redirect()->action('MusicController@index');

    }

    public function destroy($id)
    {
        Music::destroy($id);

        return redirect()->action('MusicController@index');
    }
}
