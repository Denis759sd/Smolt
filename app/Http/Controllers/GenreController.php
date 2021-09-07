<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        return view('genre.index', [
            'status_home' => '',
            'status_about' => '',
            'status_genre' => 'active'
        ]);
    }
}
