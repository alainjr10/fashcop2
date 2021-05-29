<?php

namespace App\Http\Controllers;

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
        dd($user2);
        return view('profiles.index', ['user'=>'$user']);
        //return view('postcreate', ['user'=>'$user']);
        //dd(User::find($user));
    }

    public function edit(User $user, Profile $profile)
    {
        dd($user->profile);
        //dd($profile->user->id);
        // dd(auth()->user()->id);
        //dd(Auth::user()->id);
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            // 'url' => 'url',
            // 'image' => '',
        ]);
        auth()->user()->profile->update($data);
        return redirect("/profile/{ $user->id }");
    }


}
