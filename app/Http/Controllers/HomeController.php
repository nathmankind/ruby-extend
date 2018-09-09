<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Contact;
use App\Volunteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $volunteers = Volunteer::all();
        $posts = Post::all();
        return view('home',compact('users','volunteers','posts'));
    }


}
