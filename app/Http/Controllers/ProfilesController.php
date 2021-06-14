<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        //$user = User::findOrFail($user);
        $user2 = User::find($user);
        //dd($user2);
        if($user->hasRole('investor')){
            $posts = Post::limit(4)->latest()->get();
            return view('investordashboard', compact('user', 'posts'));
        }else if($user->hasRole('admin')){
            return view('profiles.index', ['user'=>'$user']);
        }else if($user->hasRole('farmer')){
            $posts = Post::limit(4)->latest()->get();
            return view('farmerdashboard', compact('user', 'posts'));
        }
        
        //return view('postcreate', ['user'=>'$user']);
        //dd(User::find($user));
    }

    public function index2(User $user)
    {
        //$user = User::findOrFail($user);
        $user2 = User::find($user);
        //dd($user2);
        if($user->hasRole('investor')){
            $posts2 = Post::limit(4)->latest()->get()->tojson(JSON_PRETTY_PRINT);
            return response($posts2, 200);
            //return view('investordashboard', compact('user', 'posts'));
        }else if($user->hasRole('admin')){
            return view('profiles.index', ['user'=>'$user']);
        }else if($user->hasRole('farmer')){
            $posts2 = Post::limit(4)->latest()->get()->tojson(JSON_PRETTY_PRINT);
            return response($posts2, 200);
            // $posts = Post::limit(4)->latest()->get();
            // return view('farmerdashboard', compact('user', 'posts'));
        }
        
        //return view('postcreate', ['user'=>'$user']);
        //dd(User::find($user));
    }

    public function edit(User $user, Profile $profile)
    {
        //dd($user->profile);
        //dd($profile->user->id);
        // dd(auth()->user()->id);
        //dd(Auth::user()->id);
        //$this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        //$this->authorize('update', $user->profile);
        $data = request()->validate([
            'location' => 'required',
            'interests' => 'required',
            // 'url' => 'url',
            // 'image' => '',
        ]);
        //$user->profile->update($data);
        if (Profile::where('user_id', '=', Auth::id())->exists()) {
            // user found
            auth()->user()->profile()->update($data);
         }else{
            auth()->user()->profile()->create($data);
         }
        
        //auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }

    public function getAllUsers() {
        $students = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
      }


}
