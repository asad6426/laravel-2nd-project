<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function Manush()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
}
