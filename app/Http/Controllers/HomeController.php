<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $title='I miei film';
        $movies= Movie::all();
        
        return view('home',compact('title','movies'));
    }
}
