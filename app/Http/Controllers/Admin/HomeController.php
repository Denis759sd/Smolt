<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users_count = count(User::all());
        $films_count = count(Film::all());

        return view('admin.home.index',[
            'users_count' => $users_count,
            'films_count' => $films_count
        ]);
    }
}
