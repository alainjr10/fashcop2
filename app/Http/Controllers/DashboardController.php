<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        if(Auth::user()->hasRole('farmer')){
            return view('farmerdashboard');
        }elseif (Auth::user()->hasRole('investor')) {
            return view('investordashboard');
        }elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
        # code...
    }

    public function myprofile()
    {
        return view('myprofile');
    }

    public function postcreate()
    {
        return view('postcreate');
    }
}
