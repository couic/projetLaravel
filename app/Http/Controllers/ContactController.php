<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{   
    // fonction permettant de renvoyer la vue du formulaire
    public function index() {
        return view('contact');
    }

    // fonction retournant la vue confirmant la demande de contact
    public function store(ContactRequest $request)
    {
        return view('confirm');
    }
}
