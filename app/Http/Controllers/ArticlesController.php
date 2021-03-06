<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // fonction renvoyer la vue de la pages des articles
    public function index() {
        return view('articles');
    }

    // fonction permettant de récupérer un article particulier
    public function show($post_name)
    {
        $post = \App\Post::where('post_name', $post_name)->first(); // get first post with post_name == $post_name

        return view('article', array ( // Pass the post to the view
            'post' => $post
        ));
    }
}
