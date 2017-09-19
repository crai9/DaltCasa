<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventList', ['events' => Event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'image' => 'required|url',
            'address' => 'required|min:10|max:255',
            'embed' => 'required',
            'date' => 'required',
            'time' => 'required',
            'body' => '',
            'publish' => 'required',
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->image = $request->input('image');
        $event->map_iframe = $request->input('embed');
        $event->address = $request->input('address');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->unique_slug = str_slug($request->input('title')) . '-' . rand(1, 999);
        $event->author = $request->user()->id;
        $event->published = false;

        if($request->input('publish') == "yes"){
            $event->published = true;
        }

        $event->save();

        return redirect()->action('SettingsController@home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('eventEdit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|min:5|max:255',
            'image' => 'required|url',
            'address' => 'required|min:10|max:255',
            'embed' => 'required',
            'date' => 'required',
            'time' => 'required',
            'body' => '',
            'publish' => 'required',
        ]);

        $event = Event::find($request->input('id'));

        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->image = $request->input('image');
        $event->map_iframe = $request->input('embed');
        $event->address = $request->input('address');
        $event->date = $request->input('date');
        $event->time = $request->input('time');
        $event->unique_slug = str_slug($request->input('title')) . '-' . rand(1, 999);
        $event->author = $request->user()->id;

        if($request->input('publish') == "yes"){
            $event->published = true;
        } else {
            $event->published = false;
        }

        $event->save();

        return redirect()->action('SettingsController@home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);

        return redirect()->action('EventController@index');
    }
}
