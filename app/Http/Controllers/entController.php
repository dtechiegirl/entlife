<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entController extends Controller
{
    //

    public function home(){
        return view('dashboard.welcome');
    }
    public function about(){
        return view('components.about');
    }
    public function courses(){
        return view('components.courses');
    }
    
}
