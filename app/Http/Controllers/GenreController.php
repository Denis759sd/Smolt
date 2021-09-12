<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        $films = Film::orderBy('created_at', 'desc')->take(32)->get();

        return view('genre.index', [
            'films' => $films,
            'status_home' => '',
            'status_about' => '',
            'status_genre' => 'active'
        ]);
    }
}
