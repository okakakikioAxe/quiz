<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function bahasaIndonesia(){
        return view ('gameplay');
    }
}
