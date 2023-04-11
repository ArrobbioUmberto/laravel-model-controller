<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();
        $data = [
            'movies' => $movies
        ];
        return view('welcome', $data);
    }
    // public function homepage()
    // {
    //     $movies = Movie::where('vote', '>=', 9)->orderBy('id', 'asc')->get();
    //     $data = ['movies' => $movies,];
    //     return view('welcome', $data);
    // }
}
