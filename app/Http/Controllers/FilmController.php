<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;


class FilmController extends Controller
{
    public function index()
    {

        return view('films', [
            "title" => "MIFILM- Daftar Film",
            "films" => Film::latest()->filter(request(['search']))->get()
        ]);
    }


    public function show(Film $film)
    {
        return view('film', [
            'title' => 'MIFILM',
            'film' => $film
        ]);
    }
}
