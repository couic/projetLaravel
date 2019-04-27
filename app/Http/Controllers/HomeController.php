<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        // retourne la vue de la page d'accueil
        return view('welcome');
    }
}
