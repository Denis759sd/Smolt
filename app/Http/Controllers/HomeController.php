<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

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

    public function search(Request $request) {
        $search = $request->search;

        $films = Film::where('title', 'LIKE', "%{$search}%")->orderBy('title')->get();

        return view('home.search', [
            'films' => $films,
            'status_home' => '',
            'status_about' => '',
            'status_genre' => ''
        ]);
    }
}
