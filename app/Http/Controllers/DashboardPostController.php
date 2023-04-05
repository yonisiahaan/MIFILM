<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.films.index', [
            'films' => Film::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.films.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:films',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'studio' => 'max:255',
            'author' => 'max:255',
            'year' => 'max:4',
            'country' => 'max:100',
            'duration' => 'digits_between:2,6',
            'synopsis' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('film-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->synopsis), 200);

        Film::create($validatedData);

        return redirect('/dashboard/films')->with('success', 'HOORAY, Film baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('dashboard.films.show', [
            'film' => $film
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('dashboard.films.edit', [
            'film' => $film,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'studio' => 'max:255',
            'author' => 'max:255',
            'year' => 'max:4',
            'country' => 'max:100',
            'duration' => 'digits_between:2,6',
            'synopsis' => 'required'
        ];


        if ($request->slug != $film->slug) {
            $rules['slug'] = 'required|unique:films';
        }

        $validatedData = $request->validate($rules);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('film-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->synopsis), 200);

        Film::where('id', $film->id)
            ->update($validatedData);

        return redirect('/dashboard/films')->with('success', 'YEAY..Film berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        if ($film->image) {
            Storage::delete($film->image);
        }
        Film::destroy($film->id);

        return redirect('/dashboard/films')->with('success', 'HIKS, Film telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Film::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
