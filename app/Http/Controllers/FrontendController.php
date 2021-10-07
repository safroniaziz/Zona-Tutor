<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about(){
        return view('frontend/about');
    }

    public function course(){
        return view('frontend/course');
    }

    public function tutor(){
        return view('frontend/tutor');
    }

    public function article(){
        return view('frontend/article');
    }

    public function contact(){
        return view('frontend/contact');
    }
}
