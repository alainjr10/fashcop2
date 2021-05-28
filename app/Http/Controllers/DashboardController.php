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
            $post = Post::all();
            return view('farmerdashboard');
        }elseif (Auth::user()->hasRole('investor')) {
            $posts = Post::limit(4)->latest()->get();
            $randomPosts = Post::inRandomOrder()->limit(4)->get();
            return view('investordashboard', compact('posts'));
        }elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
        # code...
    }

    public function myprofile()
    {
        return view('myprofile'); //page to redirect farmers to
    }

    public function postcreate()
    {
        return view('postcreate'); //redirect investors to 
    }
}
