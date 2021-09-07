<?php

namespace App\Http\Controllers;

use App\Models\Film;

class HomeController extends Controller
{
    public function index () {
        $films = Film::orderBy('created_at', 'desc')->take(4)->get();

        return view('home.index', [
            'films' => $films,
            'status_home' => 'active',
            'status_about' => '',
            'status_genre' => ''
        ]);
    }
}
