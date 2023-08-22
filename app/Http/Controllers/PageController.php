<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    //HOME
    public function home()
    {

        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
