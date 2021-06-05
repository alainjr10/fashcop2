<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        if(Auth::user()->hasRole('farmer')){
            //$users = Auth::user()->posts()->pluck('user_id');
            //$users = User::where('id', '!=', Auth::id())->get();
            $users = Post::all()->except(Auth::id());
            $authUser = auth()->user()->id;
            //dd($users);
            //$posts = Post::all()->except(Auth::id());
            $posts = Post::where('user_id', '!=', $authUser)->get();
            //$posts = Post::inRandomOrder()->limit(4)->get();
            return view('farmerdashboard', compact('posts'));
        }elseif (Auth::user()->hasRole('investor')) {
            $posts = Post::limit(4)->latest()->get();
            return view('investordashboard', compact('posts',));
        }elseif (Auth::user()->hasRole('admin')) {
            return view('profiles.index');
        }
        # code...
    }


    public function index2()
    {   
        if(Auth::user()->hasRole('farmer')){
            //$users = Auth::user()->posts()->pluck('user_id');
            //$users = User::where('id', '!=', Auth::id())->get();
            $users = Post::all()->except(Auth::id());
            $authUser = auth()->user()->id;
            //dd($users);
            //$posts = Post::all()->except(Auth::id());
            $posts = Post::where('user_id', '!=', $authUser)->get()->tojson(JSON_PRETTY_PRINT);
            //$posts = Post::inRandomOrder()->limit(4)->get();
            return response($posts, 200);
            //return view('farmerdashboard', compact('posts'));
        }elseif (Auth::user()->hasRole('investor')) {
            $posts = Post::limit(4)->latest()->get()->tojson(JSON_PRETTY_PRINT);
            return response($posts, 200);
            //return view('investordashboard', compact('posts',));
        }elseif (Auth::user()->hasRole('admin')) {
            return view('profiles.index');
        }
        # code...
    }
    public function myprofile()
    {
        return view('myprofile'); //page to redirect farmers to
    }

    public function postcreate()
    {
        $posts = Post::limit(4)->latest()->get()->tojson(JSON_PRETTY_PRINT);
            return response($posts, 200);
        //return view('postcreate'); //redirect investors to 
    }
}
