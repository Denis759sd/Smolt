<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index () {
        return view('about.index', [
            'status_home' => '',
            'status_about' => 'active',
            'status_genre' => ''
        ]);
    }
}
