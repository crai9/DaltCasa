<?php

namespace App\Http\Controllers;

use App\FeaturedItem;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public function home()
    {
        return view('admin');
    }

    public function users()
    {
        $users = User::all();
        return view('manageUsers')->with(['users' => $users]);
    }

    public function changePermissionView(User $user)
    {
        return view('changePermission')->with(['user' => $user]);
    }

    public function changePermission(User $user, Request $request)
    {

        $this->validate($request, [
            'admin' => 'boolean',
            'writer' => 'boolean',
        ]);

        $admin = Role::where('name', 'admin')->first();
        if($request->input('admin') == true && !$user->hasRole('admin')) {
            $user->attachRole($admin);
        }
        if($request->input('admin') == false && $user->hasRole('admin')) {
            $user->detachRole($admin);
        }

        $writer = Role::where('name', 'writer')->first();
        if($request->input('writer') == true && !$user->hasRole('writer')) {
            $user->attachRole($writer);
        }
        if($request->input('writer') == false && $user->hasRole('writer')) {
            $user->detachRole($writer);
        }

        return redirect('/admin/users');
    }


    public function userSettings()
    {
        return view('userSettings')->with(['user' => Auth::user(), 'success' => false]);
    }

    public function userSettingsPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|max:40',
            'email' => 'required|email',
            'email-confirm' => 'required|email|same:email',
            'phone-number' => '',
            'location' => '',
            'mailing-list' => 'in:yes,no',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->location = $request->input('location');
        $user->phone_number = $request->input('phone-number');

        if($request->input('mailing-list') == 'yes'){
            $user->mailing_list = true;
        } else {
            $user->mailing_list = false;

        }

        $user->save();

        return view('userSettings')->with(['user' => $user, 'success' => true]);
    }

    public function editFeatured()
    {
        $featuredItems = FeaturedItem::all();

        return view('featuredEdit')->with([

            "text1" => $featuredItems->get(0)->text,
            "link1" => $featuredItems->get(0)->link,
            "image1" => $featuredItems->get(0)->image_url,
            "type1" => $featuredItems->get(0)->type,

            "text2" => $featuredItems->get(1)->text,
            "link2" => $featuredItems->get(1)->link,
            "image2" => $featuredItems->get(1)->image_url,
            "type2" => $featuredItems->get(1)->type,

            "text3" => $featuredItems->get(2)->text,
            "link3" => $featuredItems->get(2)->link,
            "image3" => $featuredItems->get(2)->image_url,
            "type3" => $featuredItems->get(2)->type,

            "text4" => $featuredItems->get(3)->text,
            "link4" => $featuredItems->get(3)->link,
            "image4" => $featuredItems->get(3)->image_url,
            "type4" => $featuredItems->get(3)->type

        ]);
    }

    public function updateFeatured(Request $request)
    {
        $this->validate($request, [

            'text1' => 'required|min:5|max:255',
            'link1' => 'required|min:5|max:255|url',
            'image1' => 'required|min:5|max:255|url',
            'type1' => 'required|in:music,book,time,random',

            'text2' => 'required|min:5|max:255',
            'link2' => 'required|min:5|max:255|url',
            'image2' => 'required|min:5|max:255|url',
            'type2' => 'required|in:music,book,time,random',

            'text3' => 'required|min:5|max:255',
            'link3' => 'required|min:5|max:255|url',
            'image3' => 'required|min:5|max:255|url',
            'type3' => 'required|in:music,book,time,random',

            'text4' => 'required|min:5|max:255',
            'link4' => 'required|min:5|max:255|url',
            'image4' => 'required|min:5|max:255|url',
            'type4' => 'required|in:music,book,time,random',

        ]);

        $featuredItems = FeaturedItem::all();

        $featuredItems->get(0)->text = $request->get('text1');
        $featuredItems->get(0)->link = $request->get('link1');
        $featuredItems->get(0)->image_url = $request->get('image1');
        $featuredItems->get(0)->type = $request->get('type1');

        $featuredItems->get(1)->text = $request->get('text2');
        $featuredItems->get(1)->link = $request->get('link2');
        $featuredItems->get(1)->image_url = $request->get('image2');
        $featuredItems->get(1)->type = $request->get('type2');

        $featuredItems->get(2)->text = $request->get('text3');
        $featuredItems->get(2)->link = $request->get('link3');
        $featuredItems->get(2)->image_url = $request->get('image3');
        $featuredItems->get(2)->type = $request->get('type3');

        $featuredItems->get(3)->text = $request->get('text4');
        $featuredItems->get(3)->link = $request->get('link4');
        $featuredItems->get(3)->image_url = $request->get('image4');
        $featuredItems->get(3)->type = $request->get('type4');

        $featuredItems->get(0)->save();
        $featuredItems->get(1)->save();
        $featuredItems->get(2)->save();
        $featuredItems->get(3)->save();

        return redirect()->action('SettingsController@home');
    }


}