<?php

namespace App\Http\Controllers;

use App\Models\Film;

class AboutController extends Controller
{
    public function index () {
        $films = Film::orderBy('created_at', 'desc')->take(16)->get();

        return view('about.index', [
            'films' => $films,
            'status_home' => '',
            'status_about' => 'active',
            'status_genre' => ''
        ]);
    }
}
