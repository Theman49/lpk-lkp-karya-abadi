<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function galery(){
        return view('galery');
    }

    public function program(){
        return view('program');
    }

    public function styleGuide(){
        return view('style-guide');
    }
}
