<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // fonction permettant de renvoyer la vue d'accueil et de lui transmettre les articles à afficher
    public function index() {
        $posts = \App\Post::all(); //get all posts
        return view('welcome', array(
            'posts' => $posts
        ));
    }
}
