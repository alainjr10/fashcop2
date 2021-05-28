<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()        
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'location'=>'required',
            'budget'=>'required',
            'image'=>['required', 'image'],
        ]);

        //dd(request('image')->store('uploads', 'public'));
        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'location' => $data['location'],
            'budget' => $data['budget'],
            'image' => $imagePath,
        ]);

        //dd(request()->all());
        return redirect('/profile/' . auth()->user()->id);
    }

    public function _construct()
    {
        $this->middleware('auth');
    }
}
