<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $posts = \App\Post::all(); //get all posts
        return view('welcome', array(
            'posts' => $posts
        ));
    }
}
