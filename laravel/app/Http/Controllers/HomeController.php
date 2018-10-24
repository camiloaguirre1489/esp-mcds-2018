<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['profile']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('home')->with('photos', $photos);
    }

    public function profile($nickname) {
        $user = User::where('nickname', '=', $nickname)->first();
        if($user) {
            $photos = Photo::where('user_id', '=', $user->id)->orderBy('id', 'desc')->get();
            return view('profile')->with('user', $user)->with('photos', $photos);
        } else {
            return abort(404);
        }
        
    }
}
