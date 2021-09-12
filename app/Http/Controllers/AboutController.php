<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;

class AboutController extends Controller
{
    public function index () {
        $films = Film::orderBy('created_at', 'desc')->take(16)->get();
        $films_count = count(Film::all());
        $users_count = count(User::all());

        return view('about.index', [
            'films' => $films,
            'films_count' => $films_count,
            'users_count' => $users_count,
            'status_home' => '',
            'status_about' => 'active',
            'status_genre' => ''
        ]);
    }
}
