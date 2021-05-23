<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function quiz(){
        return view('quiz');
    }
    public function aboutus(){
        return view('aboutus');
    }
}
