<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //HOME
    public function home()
    {
        return view('home');
    }
}
