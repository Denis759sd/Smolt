<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function show($id) {
        $film = Film::find($id);

        return view('film.show', [
            'film' => $film,
            'status_home' => '',
            'status_about' => '',
            'status_genre' => ''
        ]);
    }
}
