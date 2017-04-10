<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function about(){
        return view('about');
    }

    public function terms(){
        return view('terms');

    }public function contact(){
        return view('contact');
    }
}
